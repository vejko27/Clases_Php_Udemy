<?php
/*
Practicando con funciones, vamos a practicar con return
Vamos a calcular el área de un triángulo.
NOTA IMPORTANTE: LAS FUNCIONES DEBEN HACER SOLO 1 SOLA COSA.
Fórmula estandart:

Area = base x altura / 2
*/
function calcular_area_triangulo($base, $altura){
    $area = ($base * $altura)/2;
    return $area; 

}
//Tambien podemos añadir una variable a los parámetros para reutilizarlo varias veces.
//Temporalmente estamos poniendo los parámetros manualmente, sin embargo,
//cuando lleguemos a los formularios lo llenaremos de otra manera.
$area_triangulo = calcular_area_triangulo(10,10);

echo 'El área de un triángulo es:   ' . $area_triangulo  . '  metros cuadrados  ';



?>