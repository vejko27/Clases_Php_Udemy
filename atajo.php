<?php
// En esta lección vamos aprender Shorthand if Condicional Corto
// Vamos hacer un ejercicio en caso que el usuario tenga que ingresar
// su edad y en caso que no lo haga, le votará un mensaje

// isset, nos devuelve true o false, dependiendo de esta variable si, 
// cuenta con algún valor.
$edad = (isset($edad)) ? $edad  : 'El usuario no estableció su edad';
echo 'Edad: ' . $edad;

?>