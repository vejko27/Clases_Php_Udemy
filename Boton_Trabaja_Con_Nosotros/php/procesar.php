<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

header('Content-Type: application/json; charset=utf-8');

$projectRoot = dirname(__DIR__);
$phpMailerSource = $projectRoot . DIRECTORY_SEPARATOR . 'PHPMailer-master' . DIRECTORY_SEPARATOR . 'src';
$phpMailerFiles = array('Exception.php', 'SMTP.php', 'PHPMailer.php');
$phpMailerAvailable = true;

foreach ($phpMailerFiles as $phpMailerFile) {
    if (!is_file($phpMailerSource . DIRECTORY_SEPARATOR . $phpMailerFile)) {
        $phpMailerAvailable = false;
        break;
    }
}

if ($phpMailerAvailable) {
    foreach ($phpMailerFiles as $phpMailerFile) {
        require_once $phpMailerSource . DIRECTORY_SEPARATOR . $phpMailerFile;
    }
} else {
    $autoload = $projectRoot . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
    if (is_file($autoload)) {
        require_once $autoload;
    }
}

if (!class_exists(PHPMailer::class)) {
    http_response_code(500);
    echo json_encode(array(
        'éxito' => false,
        'mensaje' => 'No se encontró PHPMailer. Coloca la carpeta PHPMailer-master en la raíz del proyecto.'
    ));
    exit;
}

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trabaja_con_SBC";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer charset a utf8
$conn->set_charset("utf8");

// Inicializar respuesta
$respuesta = array(
    'éxito' => false,
    'correo_enviado' => null,
    'mensaje' => ''
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Obtener datos del formulario
    $nombres = isset($_POST['nombres']) ? trim($_POST['nombres']) : '';
    $apellidos = isset($_POST['apellidos']) ? trim($_POST['apellidos']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $disposicion = isset($_POST['disposicion']) ? trim($_POST['disposicion']) : '';
    
    // Validar que los campos obligatorios estén completos
    if (empty($nombres) || empty($apellidos) || empty($email) || empty($disposicion)) {
        $respuesta['mensaje'] = 'Por favor completa todos los campos requeridos';
        echo json_encode($respuesta);
        exit;
    }
    
    // Validar email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $respuesta['mensaje'] = 'El correo electrónico no es válido';
        echo json_encode($respuesta);
        exit;
    }
    
    // Procesar archivo CV
    $cv_nombre = '';
    $cv_ruta = '';
    
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
        $archivo_tmp = $_FILES['cv']['tmp_name'];
        $archivo_nombre = $_FILES['cv']['name'];
        $archivo_tamaño = $_FILES['cv']['size'];
        $archivo_tipo = $_FILES['cv']['type'];
        
        // Validar tamaño (máx 5MB)
        if ($archivo_tamaño > 5 * 1024 * 1024) {
            $respuesta['mensaje'] = 'El archivo es demasiado grande. Máximo 5MB';
            echo json_encode($respuesta);
            exit;
        }
        
        // Validar tipo de archivo
        $tipos_permitidos = array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        if (!in_array($archivo_tipo, $tipos_permitidos)) {
            $respuesta['mensaje'] = 'Solo se permiten archivos PDF, DOC o DOCX';
            echo json_encode($respuesta);
            exit;
        }
        
        // Crear directorio si no existe
        $directorio_cv = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cvs';
        if (!is_dir($directorio_cv)) {
            mkdir($directorio_cv, 0755, true);
        }
        
        // Generar nombre único para el archivo
        $extension = pathinfo($archivo_nombre, PATHINFO_EXTENSION);
        $nombre_unico = uniqid('cv_') . '_' . time() . '.' . $extension;
        $ruta_destino = $directorio_cv . DIRECTORY_SEPARATOR . $nombre_unico;
        
        // Mover archivo
        if (!move_uploaded_file($archivo_tmp, $ruta_destino)) {
            $respuesta['mensaje'] = 'Error al subir el archivo';
            echo json_encode($respuesta);
            exit;
        }
        
        $cv_nombre = $archivo_nombre;
        $cv_ruta = 'cvs/' . $nombre_unico;
    } else {
        $respuesta['mensaje'] = 'Por favor sube tu CV';
        echo json_encode($respuesta);
        exit;
    }
    
    // Preparar consulta SQL
    $sql = "INSERT INTO candidatos (nombres, apellidos, email, disposicion, cv_nombre, cv_ruta, fecha_registro) 
            VALUES (?, ?, ?, ?, ?, ?, NOW())";
    
    // Usar prepared statement
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        $respuesta['mensaje'] = 'Error en la preparación de la consulta: ' . $conn->error;
        echo json_encode($respuesta);
        exit;
    }
    
    // Vincular parámetros
    $stmt->bind_param("ssssss", $nombres, $apellidos, $email, $disposicion, $cv_nombre, $cv_ruta);
    
    // Ejecutar consulta
    $insertado = false;
    try {
        $insertado = $stmt->execute();
    } catch (mysqli_sql_exception $e) {
        if (isset($ruta_destino) && is_file($ruta_destino) && !unlink($ruta_destino)) {
            error_log('No se pudo eliminar el CV temporal de una candidatura que no se guardó.');
        }

        if ((int) $e->getCode() === 1062) {
            http_response_code(409);
            $respuesta['mensaje'] = 'Ese correo electrónico ya tiene una candidatura registrada. Usa otro correo si deseas enviar una nueva.';
        } else {
            error_log('Error al guardar la candidatura: ' . $e->getMessage());
            http_response_code(500);
            $respuesta['mensaje'] = 'No se pudo guardar la candidatura por un error en la base de datos.';
        }
    }

    if ($insertado) {
        $respuesta['éxito'] = true;
        $respuesta['mensaje'] = '¡Candidatura enviada exitosamente! Nos pondremos en contacto pronto.';

        $configCorreoPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'correo.php';
        if (!is_file($configCorreoPath)) {
            error_log('No se envió la notificación: falta el archivo config/correo.php.');
            $respuesta['correo_enviado'] = false;
            $respuesta['mensaje'] .= ' La candidatura se guardó, pero falta configurar config/correo.php para enviar el correo.';
        } else {
            try {
                $configCorreo = require $configCorreoPath;
            } catch (Throwable $e) {
                error_log('No se pudo cargar config/correo.php: ' . $e->getMessage());
                $configCorreo = null;
            }

            $configValida = is_array($configCorreo)
                && isset($configCorreo['smtp'], $configCorreo['from'])
                && is_array($configCorreo['smtp'])
                && is_array($configCorreo['from'])
                && isset(
                    $configCorreo['smtp']['host'],
                    $configCorreo['smtp']['port'],
                    $configCorreo['smtp']['username'],
                    $configCorreo['smtp']['password'],
                    $configCorreo['smtp']['encryption'],
                    $configCorreo['from']['email'],
                    $configCorreo['from']['name'],
                    $configCorreo['to']
                )
                && is_string($configCorreo['smtp']['host'])
                && is_numeric($configCorreo['smtp']['port'])
                && is_string($configCorreo['smtp']['username'])
                && is_string($configCorreo['smtp']['password'])
                && $configCorreo['smtp']['password'] !== ''
                && in_array($configCorreo['smtp']['encryption'], array('tls', 'ssl'), true)
                && is_string($configCorreo['from']['email'])
                && is_string($configCorreo['from']['name'])
                && is_string($configCorreo['to']);

            if (!$configValida) {
                error_log('No se envió la notificación: revisa los valores requeridos en config/correo.php.');
                $respuesta['correo_enviado'] = false;
                $respuesta['mensaje'] .= ' La candidatura se guardó, pero la configuración de correo está incompleta en config/correo.php.';
            } else {
                $nombreCompleto = trim($nombres . ' ' . $apellidos);
                $nombreSeguro = htmlspecialchars($nombres, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
                $apellidoSeguro = htmlspecialchars($apellidos, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
                $emailSeguro = htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
                $puestoSeguro = htmlspecialchars($disposicion, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
                $fechaRecepcion = date('d/m/Y H:i');
                $logoPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'logo' . DIRECTORY_SEPARATOR . 'SBC_TRANSPORT.jpg';
                $html = '<!doctype html><html lang="es"><head><meta charset="UTF-8">'
                    . '<meta name="viewport" content="width=device-width,initial-scale=1.0">'
                    . '<title>Nueva candidatura recibida</title></head>'
                    . '<body style="margin:0;padding:0;background-color:#f1f5f6;font-family:Arial,Helvetica,sans-serif;color:#263238;">'
                    . '<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color:#f1f5f6;">'
                    . '<tr><td align="center" style="padding:24px 12px;">'
                    . '<table role="presentation" width="560" cellspacing="0" cellpadding="0" border="0" style="width:100%;max-width:560px;background-color:#ffffff;border:1px solid #dce5e8;">'
                    . '<tr><td style="padding:12px 24px;background-color:#006f84;border-bottom:3px solid #f5b800;">'
                    . '<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0"><tr>'
                    . '<td width="82" valign="middle" style="width:82px;padding-right:14px;">'
                    . '<img src="cid:sbc-logo" width="72" height="72" alt="SMART" style="display:block;width:72px;height:72px;border:0;background-color:#ffffff;">'
                    . '</td><td valign="middle" style="color:#ffffff;">'
                    . '<p style="margin:0;font-size:11px;font-weight:bold;letter-spacing:1.3px;text-transform:uppercase;">SMART</p>'
                    . '<p style="margin:4px 0 0;font-size:15px;font-weight:bold;line-height:1.35;">Atracción de talento</p>'
                    . '</td></tr></table>'
                    . '</td></tr>'
                    . '<tr><td style="padding:24px 28px 8px;">'
                    . '<p style="margin:0 0 6px;color:#006f84;font-size:11px;font-weight:bold;letter-spacing:1px;text-transform:uppercase;">Notificación de selección</p>'
                    . '<h1 style="margin:0;color:#00596b;font-size:22px;line-height:1.3;">Nueva candidatura recibida</h1>'
                    . '<p style="margin:8px 0 0;color:#64748b;font-size:14px;line-height:1.5;">Se recibió una nueva postulación desde el formulario web.</p>'
                    . '</td></tr>'
                    . '<tr><td style="padding:12px 28px 24px;">'
                    . '<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="border:1px solid #e2e8f0;">'
                    . '<tr><td style="padding:13px 16px;background-color:#f3f8f9;border-bottom:1px solid #e2e8f0;">'
                    . '<p style="margin:0 0 4px;color:#64748b;font-size:10px;font-weight:bold;letter-spacing:.7px;text-transform:uppercase;">Puesto solicitado</p>'
                    . '<p style="margin:0;color:#00596b;font-size:16px;font-weight:bold;line-height:1.4;">' . $puestoSeguro . '</p>'
                    . '</td></tr>'
                    . '<tr><td style="padding:12px 16px 5px;">'
                    . '<p style="margin:0 0 4px;color:#64748b;font-size:10px;font-weight:bold;letter-spacing:.7px;text-transform:uppercase;">Postulante</p>'
                    . '<p style="margin:0;color:#263238;font-size:14px;font-weight:bold;">' . $nombreSeguro . ' ' . $apellidoSeguro . '</p>'
                    . '</td></tr>'
                    . '<tr><td style="padding:5px 16px 13px;">'
                    . '<p style="margin:0 0 4px;color:#64748b;font-size:10px;font-weight:bold;letter-spacing:.7px;text-transform:uppercase;">Correo de contacto</p>'
                    . '<p style="margin:0;font-size:14px;"><a href="mailto:' . $emailSeguro . '" style="color:#006f84;text-decoration:underline;">' . $emailSeguro . '</a></p>'
                    . '</td></tr></table>'
                    . '<p style="margin:14px 0 0;color:#64748b;font-size:12px;line-height:1.5;">El currículum vitae está adjunto para su revisión.</p>'
                    . '</td></tr>'
                    . '<tr><td style="padding:12px 28px;background-color:#f8fafc;border-top:1px solid #e2e8f0;">'
                    . '<p style="margin:0;color:#64748b;font-size:11px;line-height:1.5;">Trabaja con Nosotros · Mensaje automático<br>Fecha de recepción: ' . $fechaRecepcion . '</p>'
                    . '</td></tr></table>'
                    . '</td></tr></table></body></html>';

                try {
                    $mail = new PHPMailer(true);
                    $mail->isSMTP();
                    $mail->Host = $configCorreo['smtp']['host'];
                    $mail->SMTPAuth = true;
                    $mail->Username = $configCorreo['smtp']['username'];
                    $mail->Password = $configCorreo['smtp']['password'];
                    $mail->SMTPSecure = $configCorreo['smtp']['encryption'] === 'ssl'
                        ? PHPMailer::ENCRYPTION_SMTPS
                        : PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = (int) $configCorreo['smtp']['port'];
                    $mail->CharSet = 'UTF-8';
                    $mail->setFrom($configCorreo['from']['email'], $configCorreo['from']['name']);
                    $mail->addAddress($configCorreo['to']);
                    $mail->addReplyTo($email, $nombreCompleto);
                    $mail->isHTML(true);
                    $mail->Subject = 'Nueva candidatura recibida';
                    $mail->Body = $html;
                    $mail->AltBody = "Nueva candidatura recibida\n"
                        . "Puesto solicitado: {$disposicion}\n"
                        . "Postulante: {$nombreCompleto}\n"
                        . "Correo de contacto: {$email}\n\n"
                        . "El currículum vitae se encuentra adjunto.\n"
                        . "Recibida el {$fechaRecepcion}.";
                    if (!is_file($logoPath)) {
                        throw new Exception('No se encontró el logo del correo en la carpeta logo.');
                    }
                    $mail->addEmbeddedImage($logoPath, 'sbc-logo', 'SBC_TRANSPORT.jpg', 'base64', 'image/jpeg');
                    $mail->addAttachment($ruta_destino, $cv_nombre);
                    $mail->send();
                    $respuesta['correo_enviado'] = true;
                } catch (Exception $e) {
                    error_log('Error al enviar la notificación de candidatura: ' . $e->getMessage());
                    $respuesta['correo_enviado'] = false;
                    $respuesta['mensaje'] .= ' La candidatura se guardó, pero no se pudo enviar la notificación por correo. Revisa el registro de errores del servidor.';
                }
            }
        }
    } elseif ($respuesta['mensaje'] === '') {
        http_response_code(500);
        $respuesta['mensaje'] = 'No se pudo guardar la candidatura por un error en la base de datos.';
    }
    
    $stmt->close();
}

$conn->close();

// Retornar respuesta en JSON
echo json_encode($respuesta);
?>
