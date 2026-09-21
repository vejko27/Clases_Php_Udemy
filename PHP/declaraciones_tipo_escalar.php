<?php
//Declaraciones de tipo escalar.

declare(strict_types=1);
function cuadrado($n1){
    return $n1 * $n1;
}
    
$n1 = '8';
echo'El cuadrado del número ' . $n1 . ' es: ' . cuadrado($n1);


//.