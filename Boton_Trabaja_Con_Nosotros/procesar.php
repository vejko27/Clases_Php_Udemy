<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trabaja_con_nosotros";

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
        $directorio_cv = 'cvs';
        if (!is_dir($directorio_cv)) {
            mkdir($directorio_cv, 0755, true);
        }
        
        // Generar nombre único para el archivo
        $extension = pathinfo($archivo_nombre, PATHINFO_EXTENSION);
        $nombre_unico = uniqid('cv_') . '_' . time() . '.' . $extension;
        $ruta_destino = $directorio_cv . '/' . $nombre_unico;
        
        // Mover archivo
        if (!move_uploaded_file($archivo_tmp, $ruta_destino)) {
            $respuesta['mensaje'] = 'Error al subir el archivo';
            echo json_encode($respuesta);
            exit;
        }
        
        $cv_nombre = $archivo_nombre;
        $cv_ruta = $ruta_destino;
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
    if ($stmt->execute()) {
        $respuesta['éxito'] = true;
        $respuesta['mensaje'] = '¡Candidatura enviada exitosamente! Nos pondremos en contacto pronto.';
    } else {
        $respuesta['mensaje'] = 'Error al guardar los datos: ' . $stmt->error;
    }
    
    $stmt->close();
}

$conn->close();

// Retornar respuesta en JSON
header('Content-Type: application/json');
echo json_encode($respuesta);
?>
