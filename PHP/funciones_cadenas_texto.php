<?php
//Ahora vamos a ver las funciones para cadenas de texto o string.

$texto = '< > & "" ';
$texto2= 'HOla                que tal                       ';
$texto3='Victor';
//Este parámetro nos permite que otra persona no meta código a nuestra web.
htmlspecialchars($texto);
// echo htmlspecialchars_decode($texto);
//Este parámetro quita los espacios en blanco que estamos dejando en nuestros textos de la variable que llamamos.
//echo trim($texto2);


//Este parámetro mide el tamaño de nuestro string que ingresamos,
//Sumado cuenta hasta los espacios que dejamos.
//echo strlen($texto3);

//Tambien tenemos subtring que nos permite retornarnos un pedazo de la palabra que ingresamos.
echo substr($texto3, 1, 4) . '<br/>';

//Nos va a convertir nuestra cadena de texto a mayúsculas.
echo strtoupper($texto2) . '<br />' . '<br />' ;

//y con minúsculas.
echo strtolower($texto3) . '<br/>'. '<br/>';

//Nos permite conocer en que posición está una letra.
echo 'La posición de la letra indicada de este texto es: ' . strpos($texto3, 'i');

?>