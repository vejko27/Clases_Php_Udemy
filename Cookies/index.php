<?php
//Por ejemplo el usuario quiere guardar el tamaño de fuente y que se almacene en sus cookies
//Para crear una cookie nueva se realiza el sgte paso:
setcookie('font-size', '30px', time() -  60 * 60 * 24 * 30, '/');
?>
<!------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase de Cookeis</title>



</head>
<body>
    <h1>Cookie Seteada</h1>
</body>
</html>