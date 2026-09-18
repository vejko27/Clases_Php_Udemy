<?php
//Recorriendo arreglos mediante el ciclo foreach
//Aca vamos a probar con los meses del año

$meses = array('Enero','Febrero','Marzo','Abril','Mayo',
'Junio','Julio','Agosto','Setiembre','Octubre','Noviembre',
'Diciembre');

?>

<style>
    h1{
        align-items: center;
        text-align: center;
        
    }

    ul {
  counter-reset: item;
}

ul li {
  counter-increment: item;
  padding-left: 30px;
  position: relative;
}

ul li::before {
  content: counter(item);
  position: absolute;
  left: 0;
  background: #6c5ce7;
  color: white;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
}

</style>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
        <p>Para evitar estar haciendo manualmente por html
        Vamos a proceder con PHP de otra forma, como por ejemplo 
        por medio de ciclos foreach.
    </p>

    <ul>
<!--De esta manera con forech puedo organizar datos sin importar la cantidad por medio de variables que yo pueda ir asignando -->
        <?php
        foreach($meses as $mes){
            echo '<li>' . $mes . '</li>';
        }
        ?>
    </ul>

</body>
</html>