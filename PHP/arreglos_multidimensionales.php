<?php
//Arreglos multidimensionales
//Nos permite guardar uno o más arreglos uno dentro del otro
$amigos =array(

 array('Alejandro', 20),
 array('Cesar', 21),
 array('Manuel', 18)

 );

echo 'El nombre y edad es:   ' . $amigos[0][0] .'<br />' .'<br />';
echo 'El nombre y edad es:   ' . $amigos[1][0] .'<br />' .'<br />';
echo 'El nombre y edad es:   ' . $amigos[2][0] .'<br />' .'<br />';


?>

