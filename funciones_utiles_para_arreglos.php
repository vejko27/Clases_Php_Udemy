<?php
//Funciones útiles para arreglos, vamos a revisar algunas.
// Esta función extrae parámetros de los arreglos como variables.

/*
$amigo= array('telefono'=> 980683910, 'edad'=> 20, 'pais'=> 'Mexico');
extract($amigo);

echo 'El número de tu amigo es:  ' . $telefono . '<br/>' . '<br/>';
echo 'la edad de tu amigo es:  ' . $edad . '<br/>' . '<br/>';
*/


//Ahora vamos a ver una función array_pop, que nos permite extraer el último parámetro del arreglo y eleminarlo y guardarlo en otro lado.
$semana = array('Lunes',
'Martes',
'Miercoles',
'Jueves',
'Viernes',
'Sábado',
'Domingo',);

//En esta variable estamos guardando el dia domingo y podemos borrarlo del array principal.
// $ultimo_dia = array_pop($semana);

// foreach($semana as $dia){
//      echo $dia . '<br/>';
// }

//Solo muestra el último día de la semana.
// echo $ultimo_dia;

//Ahora la función join puede ser para cualquier cosa, como comillas
//espacios, hace, recibe nuestro segundo parámtero y los separa por un simbbolo que pongamos.
// echo join('<br/>', $semana) . '<br/>'. '<br/>'. '<br/>';

//Con este parámetro contamos los días de la semana de nuestro array.
// echo count($semana). '<br/>' . '<br/>';

// sort($semana);
// echo join(' - ', $semana);

//Ahora si queremos invertir los días de la semana hacemos lo siguiente:

$semana_reverse = array_reverse($semana);
echo join (' - ', $semana_reverse);


?>