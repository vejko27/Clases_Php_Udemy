<?php
/*Cuando queremos hacer nuestra web, debemos tener nuestra logica que es nuestro código PHP a parte de nuestra vista o código HTML y CSS.
*/
//vamos a realizar una función que va hacer una suma

function suma ($numero, $numero2){
    return $numero + $numero2;
}
//Con include en caso que la función falle, si seguirá mostrando el resto
//de código que tenga este archivo llamdo index.php y se usa cuando creas
//que el archivo no juega un rol muy importante en tu proyecto.

//a diferencia de require que en caso que digitemos mal el nombre del archivo generará un warning y no mostrará absolutamente nada, pero con una conexión a tu DB es necesario.
include 'vista.php';

//Tambien debemos usar include_one para que no se repita  ciertos resultados como el ejemplo que tenemos en estos momentos.

?>