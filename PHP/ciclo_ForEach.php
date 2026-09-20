<?php
//Vamos a usar el ciclo foreach, vamos a usar los meses del año con un arreglo, lo bueno de forearch, recorre datos que si mantiene y no debemos de preocuparno en poner variables de ciclos, dedibo, que mientras tenga data que recorrer lo hará, de lo contrario se detiene.
$meses= array('Enero',
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
'Diciembre',
);
//Ahora vamos añadir un arreglo asociativo.
$alejandro=array('Teléfono'=>98068910, 'Edad'=>40, 'País'=> 'mexico');


//Ahora los queremos mostrar en un documento HTML.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando Datos</title>
</head>
<body>
    <h1>Resultados a mostrar</h1>
    <ul>
        <?php
        // foreach($meses as $mes){
        // echo '<li>'. $mes . '</li>';
        // }

        foreach($alejandro as $dato => $valor){
            echo '<li>' .$dato. ' : '.  $valor . '</li>';
        }
        
        ?>
    </ul>
</body>
</html>