<?php   
//lección 11: Ahora vamos aprender a contar los elementos de los arreglos.
//Leccion 12: ahora vamos aprender a recorrer con foreach en nuestros arreglos
//Lección 14: ordenar elementos de nuestros arreglos.

$meses = array('Enero',
'Febrero',
'Marzo',
'Abril',
'Mayo',
'Junio',
'Julio',
'Agosto',
'Setiembre',
'Octubre',
'Noviembre',
'Diciembre'
);

$numeros = array('1','2','3','4','5','6','7','8','9','10','11','12');
sort($numeros);
//ejecutes este código
//Ahora lo vamos a ordenar en una lista
//Ahora lo vamos a ordenar de forma ascendente y descente
//ahora queremos ordenar los meses de forma alfabeticamente
//Para organizarlos vamos a usar el parámetro sort 
//Para ordenar en orden alfabetico
//sort($meses);
//Ahora para hacerlo al revéz usamos rsort
//rsort($meses);

//Ahora queremos ordenar los números como debe ser
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
    <?php 
     foreach($numeros as $numero) {
        echo '<li>' . $numero . '</li>';
     }
    ?>
    </ul>
</body>
</html>