<?php
//Acá vamos a trabajar con la persona en con la palabra static
class Persona{
    public static $dia= '7 de setiembre';

    //crear un método

    public static function saludo($nombre = null){
     if($nombre){
        return 'Hola buen día' . $nombre;

     }else{
        return 'Hola buen día';
     }
    }
}
//Static nos sirve para llamar a propiedades y objetos
// $carlos = new Persona;

 echo Persona::saludo(' Carlos ');
// echo '<br/>';
// echo '<br/>';
// echo Persona::$dia;


?>