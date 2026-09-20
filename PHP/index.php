<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros Pasos de PHP</title>
</head>
<body>

    <h1><?php
   
     // Echo nos sirve para mostrar información en PHP
        echo "¡Hola, Mundo!";
       # Comentario de una sola línea

       /*
        Comentario de varias líneas
        Este es un ejemplo de cómo escribir comentarios en PHP
       */

        //Ahora vamos a trabajar con varialbles en PHP
        //que son pequeños contenedores que almacenan datos de PHP
        //Podemos poner cadenas de textos
        $nombre = 'Victor Omar'; // Variable de tipo string
        $edad = 41; // Variable de tipo entero
        $altura = 1.85; // Variable de tipo flotante  
        //este tipo de variables se llama double o float
        $numero_decimal = 3.14; // Variable de tipo decimal  
        //Luego tenemos valores booleanos que pueden ser true o false
        $es_estudiante = true; // Variable de tipo booleano

        //Array: Arreglo que puede contener múltiples valores
        //Objeto: Estructura que puede contener propiedades y métodos
        //Class: clase que es una plantilla para crear objetos
        //Null: valor que representa la ausencia de un valor
        $edad2 = null; // Variable de tipo null

        
        
        echo "Mi nombre es $nombre, tengo $edad años y mido $altura metros.";

        echo 'hola, ' . $nombre;
              // existe el parámetro gettype() traer nuestra variable. 

              gettype($nombre); // Devuelve el tipo de dato de la variable $nombre
              
    ?></h1>

    
</body>
</html>