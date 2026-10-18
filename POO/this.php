<?php
//Esta es la estructura de una clase
//Una recomendación es que las clases se llamen con mayúsculas es lo mejor para identificarlos

//También vamos a usar la palabra this, para que sirve es para hacer referencia a la clase que tiene en la parte superior
class Persona {
    public $nombre;
    public $edad;
    public $pais;

//Ahora vamos agregar un método

public function mostrarInformacion(){

    echo $this -> nombre . ' tiene ' . $this ->edad . ' años de edad ' . ' y viene del país de ' . $this ->pais;

}

}
//Ahora en la sgte clase que es contructores nos van a enseñar eviar hacer todo este código,
//para evitar copíar y pegar código de forma innecesaria
$carlos = new Persona;
$carlos -> nombre = 'Carlos Arturo';
$carlos -> edad = 23;
$carlos -> pais = 'Mexico';
$carlos ->mostrarInformacion();
echo '<br />';
echo '<br />';
// $miguel -> mostrarInformacion();
$miguel = new Persona();
$miguel -> nombre = 'Miguel Alonso';
$miguel -> edad = 24;
$miguel -> pais = 'Chile';
$miguel ->mostrarInformacion();




?>