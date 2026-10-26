<?php
//Si no te gusta PDO
//Vamos a usar una nueva instancia
$conexion = new mysqli('localhost','root','root','prueba_datos2');

if($conexion-> connect_errno){

   die('Lo siento hubo un problema con el servidor');

}else{
 
  //Codigo que deseamos

}

?>