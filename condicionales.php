<?php
//En esta clase se verá conficionales if
//nos permite tomar descisiones en nuestros programas

//if(condicion){
    //Acá van las instrucciones de nuestra condición solo sí
    //se cumple, esta es la estructura básica de nuestras condiciones
    

//}
//Ahora vamos a crear una condicion como si tuvieramos una web
//vendiendo licor que no se pueden vender a menores de edad
//podemos crear una variable que si el usuario es mayor de edad.

/*Operadores que debemos tener en cuenta.
los que estoy omitiendo es menor q o mayor q
mayor o igual que.
 != Diferente
 ! negación
 Operadores lógicos:
  && = a AND
  ||, or Evalua que se cumpla al menos una condición
  xor- evalua que se cumpla una y solo una condición

  

*/

$edad = 18;
$nombre = 'Carlos';

if($edad >= 18 && $nombre ='Carlos'){
    //instrucciones
    echo '<h1> Bienvenido Carlos</h1>';
}
if($edad < 18 or $nombre != 'Carlos'){

echo '<h1> Eres menor de edad y/o no te llamas Carlos</h1>';
}
?>