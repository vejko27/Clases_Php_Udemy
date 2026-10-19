<?php
//Configuramos los datos de nuestro servidor de conexion, sea local, como tmb hosting
$host='localhost';
$basededatos ='prueba_datos';
$ususario ='root';
$contraseña = 'root';
//Luego de ello establecemos la conexion entre base de datos y algoritmo de desarrollo.
$conexion = new mysqli($host, $ususario,$contraseña,$basededatos);
?>