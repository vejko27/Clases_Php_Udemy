<?php
/*Operador de nave espacial, que solo se usa cuando quieres armar tus 
algoritmos de comparación, aunq suena muy complicado, pero cuando quieras comparar tu propia forma de comparar expresiones.
NOTA IMPORTANTE: NO SE USA MUCHO EN PROGRAMACIÓN, su símbolo es: <=>
*/


//En este ejercicio cuando lo ejecutamos nos sale CERO xq?
/*
Regresa 1 si el valor en la izquierda es mayor que el de la derecha
Regresa 0 si los valores en ambos son iguales
Regresa -1 si el valor de la derecha es mayor que el de la izquierda

*/
// echo  10 <=>3;
// echo '<br/>' . '<br/>';

// echo  1 <=>1;
// echo '<br/>' . '<br/>' ;

// echo  4 <=>3;
// echo '<br/>' . '<br/>';


//Vamos poner un arreglo ordenado 
$arreglo = [3,1,5,2,4];
//Con sort ordenamos, pero que pasa si necesitamos progrmar nosotros mismos
//una manera que ordene con nuestro propio código.
// sort($arreglo);


// function comparar($a,$b){
//     if($a == $b){
//         return 0;
//     }elseif($a > $b){
//         return 1;
//     }else{
//         return -1;
//     }

// }
function comparar($a,$b){
    return $a <=> $b;

}

usort($arreglo, 'comparar');
//Vamos a usar implode que es un separador de arreglos
echo implode(' - ', $arreglo);

?>