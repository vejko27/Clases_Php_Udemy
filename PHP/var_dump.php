<?php
//Acá vamos a conocer a Función VAR DUMP y saber para qué sirve?
//Nos permite desglosar en pantalla datos y hacerlo legible para nosotros mismos.
$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo =array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asociativo = array('nombre'=>'Carlos', 'edad'=>20);
$booleano = false;

//Visualizamos que tipo de datos es nuestra variable
echo"<pre>";
var_dump($arreglo_asociativo);
?>