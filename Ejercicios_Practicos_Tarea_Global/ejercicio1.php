<?php
// //Ejecicio 1:
// echo 'Hola Mundo'

// //Ejercicio2: 2.Declara una variable $nombre y muéstrala.

// $nombre = 'Victor';
// $apellido= 'Canova Talledo';

// echo 'El nombre del usuario es:  ' . $nombre . '  y su apellido es:  ' . $apellido; 

// //Ejercicio 3: 3.	Declara dos números y muestra su suma.

// $n1= 10;
// $n2= 20;

// $suma = $n1 + $n2;

// echo 'El resultado de la suma es:  ' . $suma;


// //Ejercio 4: 4.	Crea una variable booleana y muéstrala.

// $mayor_de_edad = true;

// var_dump($mayor_de_edad) ;

//Ejercicio 5:Crea un arreglo simple con 3 frutas y muéstralo.

// $frutas = array(' naranjas ', ' platanos ', ' mangos ');

// echo 'Las frutas que tiene Omar son: '. $frutas[0] .'<br/>'.'<br/>';
// echo 'Las frutas que tiene Joe:  '. $frutas[1].'<br/>'.'<br/>';
// echo 'Las frutas que tiene Karla:  '. $frutas[2].'<br/>'.'<br/>';

//Ejercicio 6:Muestra el tipo de dato de una variable usando var_dump(). 

// $edad = '18';
// $nombre ='Victor';

// var_dump($edad);

// var_dump($nombre);

//Ejercico 7: declarar una constante en php y mostrarla

// const Empresa = 'Smart Business Corporation SAC';

// echo 'La' . Empresa .'es una empresa de Agente de Carga internacional que trabaja con modalidad BASC';


//Ejercicio 8: Convierte un número a string.

// $numero = 1985;
// $texto = (string)$numero;

// echo $texto . '<br/>';


// var_dump($texto);

//Ejercicio 9: Convierte un string a número.


// $texto = "657";
// $numero = (int)$texto;

// echo $numero . '<br/>';


//  var_dump($numero);

//Ejercicio 10:Usa echo y print para mostrar dos mensajes distintos.

// $mensaje1 = 'Hola que tal a todos'.'<br/>' .'<br/>';

// $mensaje2 = 'como vamos?';

// echo $mensaje1 . $mensaje2;

// print $mensaje1;

//Ejercicio 11: Crea un arreglo asociativo con datos de una persona.

// $persona = array('nombre'=> 'Omar', 
//  'apellido'=>'Canova', 
//  'movil'=>'980683910',
//  'pais'=>'Perú');

//  echo 'El tercer hermano de Joe se llama:  ' . $persona['nombre'] . '<br/>';
//  echo 'los hijos de Victor papá son de apellido:  ' .$persona['apellido'] . '<br/>';



//Ejercicio 12: Muestra solo el valor “edad” del arreglo asociativo.

//  $persona = array('nombre'=> 'Omar', 
//  'apellido'=>'Canova', 
//  'edad'=> 41,
//  'movil'=>'980683910',
//  'pais'=>'Perú');

// echo 'La edad de Victor es:  ' . $persona['edad'] . ' años ' . '<br/>';

//Ejercicio 13:	Crea una variable con tu nombre y concaténala con un saludo.

// $nombre ='Victor Omar';

// echo ' Como te vá estimado: ' .$nombre .' espero que estes avanzando bien en PHP 8.0 ';

//Ejercicio 14: Declara una variable nula y comprueba si es null

// $variable = null;

// if($variable === null){
//     echo 'La variable es NULL';
// }else{
//     echo 'La variabble NO es NULL';
// }

//Ejercicio 15: Crea un arreglo de números y muestra el primer elemento.

// $edades = array(10,20,30,40,50);

// echo 'El primer elemento de este arreglo es: ' . $edades[0];

//Ejercicio 16.	Crea un arreglo y agrega un elemento nuevo.

$caballeros = array ('aries','tauro','géminis','cancer','leo');
//Agregar un elemento
$caballeros[]="Virgo";

echo 'El sexto caballero del zodiaco es: ' . '<br/>';

foreach($caballeros as $caballero){
    echo $caballero .'<br/>'. '<br/>';
}



?>