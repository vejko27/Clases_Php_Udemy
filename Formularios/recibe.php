<?php
//Ahora para recibir toda esa información, lo podemos ver como un arreglo

// print_r($_POST);
 $nombre = $_POST['nombre'];
 $Sexo = $_POST['sexo'];
 $year = $_POST['year'];
 $terminos = $_POST['terminos'];

echo ' Hola, ' . $nombre . ' eres ' .$Sexo;

?>



