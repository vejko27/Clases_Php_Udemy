<?php
//AHORA VEREMOS HERENCIA
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

    return $this -> nombre . ' tiene ' . $this ->edad . ' años de edad ' . ' y viene del país de ' . $this ->pais;

}

}
//-------------------------------------------------------------------------------------------------------------------
//Ahora vamos a usar herencias, para no estar repitiendo código
//Le vamos a pedir a PHP que quiero heredar todos los métodos y propiedades de la clase persona
class Estudiante extends Persona{
    //Ahora si nos damos cuenta nos falta carrera
    //Ahora debemos sobre escribir el contructor que estamos heredando
     function __construct($nombre,$edad,$pais,$carrera)
     { 
        //Ahpra la línea 33 llama al constuctor padre y lo añadimos con nuestro nuevo parámetro adicional
        parent::__construct($nombre,$edad,$pais);
        $this->carrera = $carrera;
    }
}

//Ahora hacemos la clase de un trabajador tmb son personas y vamos hacer un extends de la clase personas
class Trabajador extends Persona{

        function __construct($nombre, $edad, $pais,$trabajo)
        {
            parent::__construct($nombre, $edad, $pais);
            $this->trabajo = $trabajo;
        }

}

$carlos = new Trabajador('Carlos Arturo', 23, 'México', 'Jefe de sistemas');
echo $carlos->trabajo;









// class Estudiante{
//     public $nombre;
//     public $edad;
//     public $pais;
//     public $carrera;

//     function __construct($nombre,$edad,$pais,$carrera)
//     {
//         $this ->nombre =$nombre;
//         $this ->edad =$edad;
//         $this ->pais =$pais;
//         $this ->carrera=$carrera;
//     }

//     public function mostrarInformacion(){

//     return $this -> nombre . ' tiene ' . $this ->edad . ' años de edad ' . ' y viene del país de ' . $this ->pais;

// }

// }
?>