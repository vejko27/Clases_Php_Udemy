<?php
//Ahora veremos switch que es estructura un operador importante para las condiciones, 
// switch( acá siempre va la  variable no MAS){
//     case'';
//     //instrucciones
//     break;
// }
$mes = 'Febrero';

switch($mes){
    //Instrucciones a indicar 1.
    case'Diciembre';
    echo "Feliz Navidad";
    break;
    //Instrucciones a indicar 2.

    case'Enero';
    echo"Feliz año nuevo";
    break;

    case'Julio';
    echo "Feliz día de la patria del Perú";
    break;

    default: 
    echo"En este mes no se celebra nada";

    if(mes == 'Diciembre'){
        #code...
    }
}
?>