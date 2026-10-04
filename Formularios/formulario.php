<?php
$errores= [];

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
//Ahora vamos añadir todas las variantes para que no ingresen correos no validos,
//como tambien llenados incorrectos.
//TRIM sirve para eliminar espacios y caracteres especiales
if(!empty($nombre)){
    // $nombre = trim($nombre);
    // $nombre = htmlspecialchars($nombre);
    // $nombre = stripcslashes($nombre);

    $nombre= filter_var($nombre);
    echo "Tu nombre es:  $nombre <br/> <br/>";
}else{
    $errores[] = 'Por favor agrega un nombre'. '<br/>';
}
/*
Ahora también vamos hacer validaciones con correo
*/
if(!empty($correo)){
    //Nos permite sanear errores de correos inexistentes
   $correo =  filter_var($correo);

   if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){

   $errores[] = 'Por favor ingresa un correo válido'. '<br/>' ;

   }

  echo "Tu correo es:  $correo <br/> ";

}else{
    $errores[] = 'Por favor agregar un correo correcto';
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../Iconos/PHP.ico?v=2" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Formulario_1_PHP</title>
</head>
<body>

<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

 <section>
    <P>Formulario de Contáctenos</P>

    <div>
        <label for="hombre">Hombre</label>
     <input type="text" name="nombre" placeholder="Ingresa tu nombre">
    </div>

    <div>
        <label for="correo">Correo</label>
        <input type="email" name="correo" placeholder="Ingresa tu correo">
    </div>

    <div>
    <?php if(!empty($errores)): ?>
    <!--Todo lo que pongamos es HTML-->
    <div class="error">
        <?php foreach($errores as $error): ?>
          <p><?php  echo $error; ?></p>
        <?php endforeach; ?>
        </div> 
    <?php endif; ?>
        <input type="submit" name="submit">
    </div>
 </section>

</form>
    
</body>
</html>