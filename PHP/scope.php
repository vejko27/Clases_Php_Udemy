<?php
//Ahora vamos hablar de SCOPE, ambito de las variables

//Esta es una variable local
$numero=7;

function mostrarNumero($numero){
    //Esta se vuelve en una variable global, es por ello que
    //las funciones no pueden acceder a las variables locales
        echo $numero; 
}

mostrarNumero($numero);
?>