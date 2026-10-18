<?php
//Ahora vamos a ver Scope es una variable de un función suele referirse a public, private y protected
//Ahora vamos a trabajar con usuarios de una página web que tiene un usuario y un correo
/*
Scope     Mismaclase     Clase hija     Desdefuera
public         ✅         ✅             ✅
protected      ✅         ✅             ❌
private        ✅         ❌             ❌
*/

class Usuario{
    public $usurio;
    protected $correo;

    //ahora vamos activar nuestro contructor

    function __construct($nombre, $correo){
    
         $this->nombre = $nombre;
         $this->correo = $correo;

    }

    //vamos agregar un método
    public function mostrarInfo(){
        return $this->correo;
    }
}

class Miembro extends Usuario{
    public function mostrarCorreo(){
      return 'Este es el correo: ' .$this->correo;
    }
}

$carlos = new Miembro('Carlos', 'carlos@gmail.com');
echo $carlos->mostrarCorreo();

?>