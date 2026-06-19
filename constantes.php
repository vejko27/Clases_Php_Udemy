<?php
//Notas:
# Los nombres de las variables son sencibles a mayúsculas y minúsculas, por lo que $nombre y $Nombre son variables diferentes.
# Los nombres de variables no pueden llevar espacios, empezar por números
#o llevar caracteres especiales como @, #, $, etc. Sin embargo, pueden contener guiones bajos (_) para separar palabras.

#Tipo de datos en PHP:
#String: Cadenas de texto, se pueden definir con comillas simples ('') o dobles ("").
#Integer: Números enteros, sin decimales.   
#Float o Double: Números con decimales.
#Boolean: Valores de verdad, pueden ser true o false.   
#Array: Arreglo que puede contener múltiples valores.
#Objeto: Estructura que puede contener propiedades y métodos.
#Class: clase que es una plantilla para crear objetos.
#Null: valor que representa la ausencia de un valor.

//Ejemplo de variables alamcenando diferentes tipos de datos:

//string
$nombre = 'Victor Omar'; // Variable de tipo string
//integer
$edad = 41; // Variable de tipo entero  
//Boleano
$es_estudiante = true; // Variable de tipo booleano


//Comillas sencillas vs comillas dobles:
#En las comillas dobles, podemos llamar variables, mientras que en las sencillas NO.
#Sin embargo usar comillas dobles en ciertas situaciones puede traernos problemas de seguridad, como la inyección de código, por lo que es recomendable usar comillas sencillas siempre que no necesitemos interpretar variables dentro de la cadena de texto.

//COn las constantes se escriben de la forma siguiente:

define('PI', 3.1416); // Definimos una constante llamada PI con el valor de 3.1416
#define ('PI', 3.18); te genera un error al momento de poner la misma defición
//con un número distinto xq ya estaba definida en un inicio.
define('NOMBRE', 'Victor');
echo PI; // Imprime el valor de la constante PI
//Las constantes no llevan comillas
echo NOMBRE;

?>