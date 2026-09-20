<?php
//Ahora vamos a ver los parámetros que asignamos en las funciones.
//Llamando a una función pero tenemos que hacerla más útil, como por ejemplo: que salude al usuario que ingresa llamandolo correctamente por medio de nuestra función.
// function saludo($nombre){

// echo 'Saludos estimado, ' . $nombre;
// echo '<br />';
// echo '<br />';

// }
// saludo('Carlos');
// saludo('Victor');
// saludo('Omar');
// saludo('Miguel');

//Ahora vamos a realizar la suma de dos números.
// function sumar($n1 , $n2){

//  $resultado = $n1 + $n2;    
//  echo 'La suma es: ' . $resultado;
//  echo '<br>';
//  echo '<br>';
 
// }

// sumar(1, 15);
// sumar(1, 15);
// sumar(1, 15);
// sumar(1, 15);
//Una función para traer artículos de una página web.

// //Ahora vamos a rotar valores de las funciones con la sentencia RETURN
// //Nos permite es devolver un valor desde una función hacia afuera.
// function sumar($n1,$n2){
//     $resultado = $n1 + $n2;
//     return $resultado;
//     //Evita de usar echo al mostrar resultados, no es correcto y solo podemos usarlo una vez y no debemos de seguir escribiendo código
//     //debajo de la palabra return.
// }

// $resultado = sumar(15,10);



//Ahora vamos hacerlo con un saludo
function saludo($nombre){
  return 'Como estás estimado:  '.$nombre;
  
} 
   
echo saludo('Omar') . '<br/>';
echo saludo('Victor'). '<br>';
?>