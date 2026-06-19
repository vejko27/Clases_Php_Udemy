<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos multidimensionales de PHP</title>
</head>
<body>
    <?php
//Ahora veremos arreglos multidimensionales de amigos uno dentro del otro
  $amigos = array(
     array('Miguel', 38),
     array('Cereza', 36),
     array('Diego',37)
     );

  echo $amigos[0] [0] . '<br/>';
  echo $amigos[1] [0] . '<br/>' ;
  echo $amigos[2] [0] . '<br/>' ;
  


?>
</body>
</html>

