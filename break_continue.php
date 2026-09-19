<?php
//Ahora vamos a ver la sentencia break y continue
//Podemos saltar ciclos

$paises = array('Mexico',
'España',
'Colombia',
'Perú',
'Argentina',
'Venezuela',
'Guatemala',);

// foreach($paises as $pais){
//    echo $pais . '<br/>';
// //Ahora también podemos hacer que se muestren dos paises o lo que queramos
//   if($pais == 'España'){
//     break;
//   }
// }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Paise Latinoamericanos</h1>

    <?php
    //En este ejercicio mostramos todos los países pero menos españa con 
    //continue.
      foreach($paises as $pais){
        if($pais == 'España'){
        continue;
        }
        echo $pais .'<br/>';
}
    ?>
</body>
</html>