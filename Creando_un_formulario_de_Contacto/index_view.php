<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="../Iconos/PHP.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Practica de formulario de contacto</title>
</head>
<body>

<div class="wrap">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8');?>" method="post" novalidate>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)) echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); ?>">

    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php if(!$enviado && isset($correo)) echo htmlspecialchars($correo, ENT_QUOTES, 'UTF-8'); ?>">

    <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"><?php if(!$enviado && isset($mensaje)) echo htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8'); ?></textarea>
    <?php if(!empty($errores)) : ?>
    <div class="alert error">
        <?php foreach($errores as $error) : ?>
            <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endforeach; ?>
    </div>
    <?php elseif(isset($enviado) && $enviado): ?>
    <div class="alert success">
        <p>Enviado Correctamente</p>
    </div>
    <?php endif ?>

    <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
  </form>
</div>
</body>
</html>