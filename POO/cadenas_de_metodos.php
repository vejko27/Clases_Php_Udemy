<?php
class Usuario{
    public $nombre;
    public $correo;

  function __construct($nombre, $correo)
  {
    $this->nombre = $nombre;
    $this->correo = $correo;
  }
//Ahora quiero crear dos métodos para mostrar el nombre y el correo
  public function mostrarNombre(){
    echo 'Su nombre es:  '  .$this->nombre . '<br />' . '<br/>';
    return $this;
  }

   public function mostrarCorreo(){
    echo 'Su correo es:  '  .$this->correo . '<br />';
    return $this;
  }
}


$carlos = new Usuario('Carlos', 'carlos@gmail.com');
//En caso que tengamos mucha data que mostrar y para evitar y copiar.
//Podemos encadenar lo métodos
$carlos->mostrarNombre()->mostrarCorreo();

?>