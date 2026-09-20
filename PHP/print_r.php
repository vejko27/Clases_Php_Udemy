<?php
//Ahora vamos a ver la función PRINT_R, nos muestra datos pero no nos indica que tipo de dato es a diferencia de var_dump.
$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo =array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asociativo = array('nombre'=>'Carlos', 'edad'=>20);
$booleano = true;

print_r($booleano);
?>