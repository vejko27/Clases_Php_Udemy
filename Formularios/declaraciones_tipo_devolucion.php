<?php
//Esto nos ayuda para trabajar con variables que están setadas 
//para luego asignarlas

declare(strict_types=1);
function obtenerEdad() : int{
    $edad ='23';    // esto es un string
    return $edad;   //pero la función promete devolver un int
}

echo obtener_edad();
?>