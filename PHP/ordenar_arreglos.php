<?php
//Ahora vamos a ordenar arreglos
$meses = array('Enero','Febrero','Marzo','Abril','Mayo',
'Junio','Julio','Agosto','Setiembre','Octubre','Noviembre',
'Diciembre');

$numeros = array(1,2,3,4,5,6,7,8,9);

sort($numeros);

//Con el comando SORT no muestra como usarlo y que variable
//vamos a ordenar de forma ascendente.
//sort($meses);

//Ahora si queremos la reversa del orden usamos el comando RSORT.
rsort($meses);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meses del año</title>
</head>
<body>
    <h1>Organizar data por medio de ForEach</h1>
        <p>Para evitar estar haciendo manualmente por html
        Vamos a proceder con PHP de otra forma, como por ejemplo 
        por medio de ciclos foreach.
    </p>

    <ul>
<!--De esta manera con forech puedo organizar datos sin importar la cantidad por medio de variables que yo pueda ir asignando -->
        <?php
        foreach($numeros as $numero){
            echo '<li>' . $numero . '</li>';
        }
        ?>
    </ul>

</body>
</html>