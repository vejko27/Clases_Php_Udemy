<?php
//Vamos aprender a usar condicional IF
//La estructura es:
// if(condicion){
//     instrucciones
//   }
//Ejemplo de un sitio web donde vendemos Licor y que no púedes vender a menores de edad, sino a mayores de edad.

/* Operadores de comparación
== igualdad
< menor que 
> mayor que
<= menor o igual que
> mayor o igual que
 != Diferente
 ! Negación
Operadores lógicos

&& - Evalua que se cumplan las 2 condiciones
||, OR - Evalua que se cumpla al menos una condición
xor - Evalua que se cumpla 1 sola condición
*/

//Ahora veremos condicional ELSE que es algo muy sencillo

$edad= 18;
$nombre = 'Carlos';

if($edad >= 18 && $nombre= 'Carlos'){
    //instrucciones
    echo '<h1>Bienvenido</h1>';
}

if($edad < 18 or $nombre != 'Carlos'){
    echo '<h1>Eres menor de edad</h1>'; 
}
?>