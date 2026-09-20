<?php
//Ahora veremos switch que es estructura un operador importante para las condiciones, 
// switch( acá siempre va la  variable no MAS){
//     case'';
//     //instrucciones
//     break; es impórtante  para darle fin al swicht

// Default se pone en caso que los demás casos no haya sido exitoso
// }
$mes = 'Marzo';

switch($mes){
    case'Diciembre':
        //Intrucciones
        echo"Feliz Navidad";
        break;

    case'Febrero':
        echo" Feliz cumpleaños Omar ";
        break;

        default:
        echo"No se encontró el mes solicitado";
}

?>