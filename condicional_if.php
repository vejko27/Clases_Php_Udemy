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
 
*/
$edad= 17;

if($edad >= 18){
    //instrucciones
    echo '<h1>Bienvenido</h1>';
}

if($edad < 18){
    echo '<h1>Eres menor de edad</h1>'; 
}
?>