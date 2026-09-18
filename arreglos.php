<?php
//Ahora vamos a ver arreglos o ARRAYS o vectores
//que nos permiten guardar distintas variable multiples
//Este es un tipo de arreglo indexado

// La estructura de un arregle es $variable = array('');
$semana = array('lunes',
'martes',
'miercoles',
'jueves',
'viernes',
'sabado',
'domingo');
//Puedes modificar a los arreglos y sobre escribiendo sobre él
$semana[7] = 'Falcon Master';

#echo $semana[7] = 'FalconMasters';

echo $semana[0] . '<br />';
echo $semana[1] . '<br />';
echo $semana[7] . '<br />';

?>