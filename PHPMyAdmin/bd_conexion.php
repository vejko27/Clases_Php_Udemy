<?php
//Configruando base de datos en programación
$host='localhost';
$basededatos ='prueba_datos';
$ususario ='root';
$contraseña = 'root';

$conexion = new mysqli($host, $ususario,$contraseña,$basededatos);
?>