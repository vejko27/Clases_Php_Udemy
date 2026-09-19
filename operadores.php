<?php
/*Ahora veremos operadores 

//Aritméticos
    //...
    + Suma
    - Resta
    * multiplicación
    / División
    % es la diferencia que tenemos en una división
*/
//$numero = 10;
//$numero2= 6;
//$resultado = $numero % $numero2;
//echo $resultado;

/////////////////////////////////////////////////////

// Operadores de Asignación:
/*
=
+=
-=
*=
/=
*/

// $numero =10;
// $numero2 =5;

// //$numero = $numero + 7;
// $numero += 7;
// echo $numero;

///////////////////////////////////////////////////////

// Operadores de comparación
/*
== igual que
=== este se llama idéntico
!= diferente, <>
!==
>
<
>=
cuando tengas una variable en '' se vuelve en dato STRING
*/
// $numero = '10'; // Cuadno usamos comillas simples se vuelve tipo String 
// $numero2 = 5;
//  $variable ='true';
//   if($variable == true){
//     echo 'Es idéntico';
//  } else{
//    echo 'Es diferente el dato';
// }


/*
Operadores lógicos

and, &&
or ||
xor
! 

------------------------------*/
// $numero = 10;
// if($numero <= 10 && $numero < 20 ){
//     echo 'Ejecuta';
//  }

/*
Operadores de incremento / Decremento
su función es agregar unidades de una en una

++$x
$x++
--$x
 // $x--

*/ //Es el incremento en 1 tal cual como tenemos sobreado
// $numero =10;
// $numero2=20;
// // $numero = $numero +1;
// //Es el incremento en 1 tal cual como tenemos sobreado
// //Sobre todo ayuda en ciclos
//  $numero++;
//  echo $numero;

//  echo '<br />';
//  echo '<br />';

// --$numero2;
// echo $numero2;

//Ahora si queremos concatenar debemos textos para ello usamos punto .
//Lo haremos de la siguiente manera

$texto ='Cadena de texto 1';
$texto2=' Cadena de texto 2';

$resultado = $texto . '<br/>' .$texto2;
echo $resultado;

?>