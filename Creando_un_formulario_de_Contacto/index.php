<?php

$errores = [];
$enviado = '';

if(isset($_POST['submit'])) {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Validación del nombre
    if(!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre);
    } else {
        $errores[]= 'Por favor ingresa un nombre <br/>';
    }

    // Aquí irán las demás validaciones (correo, mensaje, etc.)
    //Ahora vamos usar condicional para el correo

    if(empty($correo)){
        $correo= filter_var($correo, FILTER_SANITIZE_EMAIL);
        if(! filter_var($correo,FILTER_VALIDATE_EMAIL));


    }

}

/*
Warning: Undefined variable $enviado in C:\xampp\htdocs\Clases_Php_Udemy\Creando_un_formulario_de_Contacto\index_view.php on line 26

*/
require 'index_view.php';
?>

