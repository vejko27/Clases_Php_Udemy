<?php
//Que es programación orientada en objetos Ejemplo1: sin POO


// $nombre = 'Carlos';
// $edad = 23;
// $pais = 'mexico';
// echo $nombre;
class persona{
    public $nombre;
    public $edad;
    public $pais;


//Acá podemos añadir funciones    
    public function mostrarInformacion(){
        echo 'Hola Mundo';
    }
}
//Una clase es una plantilla que guarda variables y funciones
//Cada clase guarda variables o propiedades
$carlos = new persona;
$carlos -> nombre = 'Carlos Arturo';
$carlos -> edad = '23';
$carlos ->pais = 'Mexico';

//Acá ponemos en uso la función(que se llaman métodos) que hemos puesto + nuestra función
$carlos -> mostrarInformacion();

// echo $carlos -> nombre . '  tiene  ' . $carlos ->edad . ' años de edad '; 

$alejandro = new persona;
$alejandro -> nombre = 'Alejandro Miguel';
$alejandro-> edad = '24';
$alejandro ->pais = 'Chile';







?>
