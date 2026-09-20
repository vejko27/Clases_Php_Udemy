<?php   
//lección 11: Ahora vamos aprender a contar los elementos de los arreglos.
//Leccion 12: ahora vamos aprender a recorrer con foreach en nuestros arreglos
//Lección 14: ordenar elementos de nuestros arreglos.

$meses = array('Enero',
'Febrero',
'Marzo',
'Abril',
'Mayo',
'Junio',
'Julio',
'Agosto',
'Setiembre',
'Octubre',
'Noviembre',
'Diciembre'
);
// La función count nos devuelve el número de valores que tenemos dentro de un arreglo
// echo 'Quiero que me cuentes cuantos meses tenemos en el año:   ' . count($meses) .'<br />' .'<br />';

$ultimo_mes = count($meses) -1;
echo 'El último mes que es Diciembre, cuenta con el número en nuestro array como número:  '.$ultimo_mes;





?>

