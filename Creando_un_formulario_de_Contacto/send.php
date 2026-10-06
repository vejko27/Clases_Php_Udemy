<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . '/Mailer/PHPMailer-master/src/Exception.php';
require_once __DIR__ . '/Mailer/PHPMailer-master/src/PHPMailer.php';
require_once __DIR__ . '/Mailer/PHPMailer-master/src/SMTP.php';

function enviarCorreoContacto($nombre, $correo, $mensaje)
{
    $usuario = getenv('O365_SMTP_USER');
    $contrasena = getenv('O365_SMTP_PASSWORD');

    if (!$usuario || !$contrasena) {
        throw new RuntimeException('Faltan las variables de entorno de Office 365.');
    }

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.office365.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $usuario;
    $mail->Password   = $contrasena;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // El remitente debe ser la cuenta de Office 365 que inicia sesión.
    $mail->setFrom($usuario, 'Formulario Web');
    $mail->addAddress($usuario);
    $mail->addReplyTo($correo, $nombre);

    $nombreHtml = htmlspecialchars($nombre, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $correoHtml = htmlspecialchars($correo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $mensajeHtml = nl2br(htmlspecialchars($mensaje, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'));

    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje desde el formulario';
    $mail->Body = "
        <h3>Nuevo mensaje recibido</h3>
        <p><strong>Nombre:</strong> {$nombreHtml}</p>
        <p><strong>Correo:</strong> {$correoHtml}</p>
        <p><strong>Mensaje:</strong><br>{$mensajeHtml}</p>
    ";
    $mail->AltBody = "Nombre: {$nombre}\nCorreo: {$correo}\nMensaje:\n{$mensaje}";
    $mail->send();
}
