<?php
session_start();

if($_SESSION){
    $nombre = $_SESSION['nombre'];
    echo "<h1>Hola , $nombre</h1>";
    // print_r($_SESSION);

}else{
    echo 'No has iniciado sessión';
}

?>
<!-------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    
    <a href="Cerrar.php">Cerrar Sesión</a>
</body>
</html>