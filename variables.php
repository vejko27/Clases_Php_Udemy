<?php
//Variables como tema
//Todas las varibales deben estar en minúsculas y las variables con números no llena doble comilla
//String Cadena de texto
$nombre = "Victor";

//Integer Numeros entreros
$numeros =7;

//Numero decimal son tipo double
$numero_decimal= 3.14;

//Boolean: Verdadero o falso (true / false)
$verdadero = true;

#Array: Arreglo
#Object: Objeto
#Class: Clase
#Null: Cuando a una variable aun no se le ha asignado ningun valor

//Las comillas dobles me permiten traer variables.
//Sin embargo recomiendan usar las comillas sencillas para mejor practica.
echo  "Hola $nombre";

//Cuando usamos comillas sencillas y sumamos un punto podemos concatenar
//nuestro saludo + nuestra variable y es mas seguro en programación.
echo 'Mi número de la suerte es: '.$numeros;

//Como hacemos para saber que tipo de variable es? 
// y para ello usamos gettype
echo gettype($nombre);


?>



