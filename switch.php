<?php
//Ahora veremos switch que es estructura un operador importante para las condiciones, 
// switch( acá siempre va la  variable no MAS){
//     case'';
//     //instrucciones
//     break;
// }
$mes = 'Marzo';
switch($mes){
    case 'Diciembre';
    //Instrucciones
    echo 'Feliz Navidad';
    
    break; // es importante ponerlo para poder cerrar el ciclo

    case 'Enero';
    echo 'Feliz Año Nuevo';
    //Instrucciones
    break;

    case 'Febrero';
    echo 'Feliz Cumpleaños Victor Cánova';
    //Instrucciones
    break;

    default: // el se va a ejecutar en caso que los anteriores no cumplan
    echo 'En este mes no se celebra nada';
}

if($mes == 'Diciembre'){
    echo 'Feliz Navidad';
}else if($mes == 'Enero'){
 echo'Feliz Año Nuevo';
}else{
    echo 'En este mes no se celebra nada';
}
 
?>