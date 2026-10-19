<?php
/*ahora vamos hacer que cada usuario que inicie session, vea su nombre como session propia
*/
//Vamos a crear nuestras sessiones
session_start();

$_SESSION['nombre'] = 'Carlos';



?>
<!-------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <h1>Página de Inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir a la página 2</a>
</body>
</html>