<?php
//Clases Abstractas es una forma de proteger toda nuestra clase
//Ahora no la va a mosrar a excepción que la heredemos con una clase hija
//No se suele usar mucho
abstract class Persona{
   public function saludo(){
     return 'Hola';
   }

}

class Estudiante extends Persona{


}

$carlos = new Estudiante;
echo $carlos->saludo();

?>