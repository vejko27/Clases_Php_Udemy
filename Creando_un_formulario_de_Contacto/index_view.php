<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../Iconos/PHP.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Practica de formulario de contacto</title>
</head>
<body>

<div class="wrap">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="">

    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="">

    <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"></textarea>

     <div class="alert error">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet dolorum esse et culpa hic eius similique dolores saepe praesentium sunt vero accusamus doloribus, ullam adipisci est iste recusandae. Necessitatibus, inventore?</p>
     </div>

     <div class="alert success">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet dolorum esse et culpa hic eius similique dolores saepe praesentium sunt vero accusamus doloribus, ullam adipisci est iste recusandae. Necessitatibus, inventore?</p>
     </div>

    

    <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
  </form>
</div>
</body>
</html>