<?php
/*
Tenemos operadores de fusión o que podemos usar dobles
como igual que ==

el símbolo ? significa entonces.

ISSET sirve para comprobar si una variable está definida(ha creada) y tiene un valor 
distinto de NULL, devuelve verdadero o false.

: esto significa de otra forma

*/
// $nombre= isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';

$nombre = $_GET['nombre']  ?? 'Anonimo';
echo $nombre;



