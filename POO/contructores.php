<?php
//Esta es la estructura de una clase
//Una recomendación es que las clases se llamen con mayúsculas es lo mejor para identificarlos
//También vamos a usar la palabra this, para que sirve es para hacer referencia a la clase que tiene en la parte superior

//AHORA VAMOS A USAR CONTRUCTORES EN ESTA CLASE
class Persona {
    public $nombre;
    public $edad;
    public $pais;

//Ahora vamos agregar un contructor------------------------------------------------------
     function __construct($nombre,$edad,$pais)
     {
        $this ->nombre =$nombre;
        $this ->edad =$edad;
        $this ->pais =$pais;
     }
//--------------------------------------------------------------------------------------
public function mostrarInformacion(){

    echo $this -> nombre . ' tiene ' . $this ->edad . ' años de edad ' . ' y viene del país de ' . $this ->pais;

}

}
//Ahora en la sgte clase que es contructores nos van a enseñar eviar hacer todo este código,
//para evitar copíar y pegar código de forma innecesaria
$carlos = new Persona('Carlos Arturo', 23, 'México');
$carlos ->mostrarInformacion();
echo '<br />';
echo '<br />';
$miguel = new Persona('Miguel Alonso', 24, 'Chile');
$miguel -> mostrarInformacion();

