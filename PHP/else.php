<?php
//Vamos a usar condicional ELSE 
/*
La estructuras es:

if(){
}

tambien podemos añadir varios condicionales y dentro de ellos mas condicionales, a esto se llama anidar condicionales 
if(condicion){
        if(condicion2){
            if(condicion3){
                #code
            }
        }
}

*/

/*Este ejmplo es con edad de forma básica
$edad = 16;

if($edad >=18){

echo "<h1>Bienvenido</h1>";

} else{
    echo "No eres mayor de Edad";
}
    */

//Ahora vamos hacer una mas compleja con mes.
$mes= 'Julio';
///////////////////////////////////////
if($mes == 'Diciembre'){

echo "Feliz Navidad";

} else if($mes == 'Enero'){

        echo"Feliz año nuevo";
} else if($mes=='Julio'){
    echo'Felices fiestas Patrias';
}

?>