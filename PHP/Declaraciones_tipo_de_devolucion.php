<?php
//Declaraciones tipo devolución, acá nos permite especificar que tipo de datos queremos regresar.

//Si queremos ser estrictos debemos añadir a nuestro código la función: declare(strict_types=1); para evitar problemas a la hora que otro desarrollador toque el código.
declare(strict_types=1);
function obtener_edad() : int{
    //Con el cambio que hemos puesto de obtener edad no nos interesa el texto solo el número, entonces procedemos a añadir :  int en el nombre de la función.
    $edad= 23;
    return $edad;
}

echo obtener_edad();


?>