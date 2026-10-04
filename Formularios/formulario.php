<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <label for="hombre">Correo</label>
        <input type="email" name="correo" placeholder="Ingresa tu correo">
    </div>

    <div>
    <input type="submit" name="submit">
    </div>
 </section>

</form>
    
</body>
</html>