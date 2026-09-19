<?php
//Ahora vamos a usar ShortHand If - Condicional corto
//Es un atajo cuando trabajamos con variables
//Es por ejemplo cuando vamos preguntar la edad a un usuario y si el usuario no establece su edad, tenemos que añadir un mensaje que el usuario no quiere compartir su edad o que no ha ingresado nada.
/*
ISSET nos vá a devolver TRUE O FALSE, dependiendo que la variable a sido seteado.
*/

//$edad=18;

$edad = (isset($edad)) ? $edad :'El usuario no estableció su edad' ;
echo 'Edad:  ' . $edad;

?>