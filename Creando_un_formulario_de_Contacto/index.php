<?php

$errores = [];
$enviado = '';

if(isset($_POST['submit'])) {

    $nombre = trim($_POST['nombre'] ?? '');
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Validación del nombre
   if ($nombre === '') {
    $errores[] = 'Por favor ingresa un nombre';
} elseif (!preg_match("/^[\p{L}\p{M} .'-]+$/u", $nombre)) {
    $errores[] = 'El nombre contiene caracteres no permitidos';
}

    // Aquí irán las demás validaciones (correo, mensaje, etc.)
    //Ahora vamos usar condicional para el correo
    if(! empty($correo)){
        $correo= filter_var($correo, FILTER_SANITIZE_EMAIL);

        if(! filter_var($correo,FILTER_VALIDATE_EMAIL)){
          $errores[]='Por favor ingresa un correo válido:';
        }
    }else{
        $errores[]= 'Por favor ingresa un correo:  ';
    }
    //Nos falta trabajar el área del mensaje y mantener la información en pantalla.
    //El comando TRIM nos ayuda a limpiar espacios de incio y final

    if(!empty($mensaje)){
        $mensaje=htmlspecialchars($mensaje);
        $mensaje=trim($mensaje);
        $mensaje=stripcslashes($mensaje);

    }else{
        $errores[]='Por favor ingresa el mensaje';
    }
//Ahora tenemos que comprobar que no tenga errores
     if(! $errores){
        $enviar_a='tunombre@tuempresa.com';
        $asunto = 'Correo enviado desde mi Pagina.com';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n ";
        $mensaje_preparado .= "Mensaje: " . $mensaje;

        // mail($enviar_a, $asunto,$mensaje_preparado);
        $enviado = true;
     }
}

require 'index_view.php';
?>

