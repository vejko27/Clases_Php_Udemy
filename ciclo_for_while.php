<?php
//Cliclo for while

$meses = array('Enero',
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
//Esto si lo hacemos con FOR
//  for($i = 0; $i < count($meses); $i++ ){
//  echo $meses[$i] . '<br/>'. '<br/>';
//  }

//Pero ahora lo vamos a usar con while
$contador = 0;
while($contador < count($meses)){
    echo $meses[$contador] . '<br/>'. '<br/>';
    $contador++;
    

}
?>