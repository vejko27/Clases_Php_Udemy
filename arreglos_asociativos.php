<?php
//Los arreglos son como variables que nos permiten guardar multiples valores
#Ejempplos días de la semana, sin embargo este tipo de arreglo es indexado
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');


// Los arreglos podemos guardar cualquier tipo de datos incluso dentro 
// de un arreglo.
$arreglo = array('Cadena de texto', 7 , array('asd', 123), true);


//Arreglo asociativos nos permite acceder a cadenas que nosotros le
//especifiquemos

$victor = array('telefono'=> '980683910', 'edad'=> 40 ,  'apellido'=> 'Canova',   'pais'=> 'Perú');

echo 'El número de celular de Victor es: ' . $victor['telefono'] . '<br />'. '<br />';
echo 'Su edad de Victor es:  ' . $victor['edad'] . '<br />' . '<br />';
echo 'El apellido de Victor es:  ' . $victor['apellido'] . '<br />' . '<br />' ;
echo 'Su país de Origen es: ' . $victor['pais'] . '<br />';

?>