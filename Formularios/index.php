<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
<!--Vamos a usar name para utiliar el parámetro name para llamar a PHP

-->    
<form action="recibe.php" method="post">
<div>
    <input type = "text" placeholder="Nombre: " name="nombre">
</div>

<div>
<!--Para asociar nuestro label debe tener el misno nombre que el id de nuestro input.
-->
    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" value="hombre" id="hombre">

    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" value="mujer" id="mujer">

<!--Ahora podemos usar los combo_box y usalomos la etiqueta select.
--> 
    <select name="year" id="year">
      <?php 
        for($y = 1900; $y <= 2026; $y++){
        echo "<option value= '$y'>$y</option>";
      }
      ?>
    </select>

</div>

<!--Ahora vamos a usar check_box.
-->
 <div>
    <label for="terminos">Aceptas todos los términos?</label>
    <input type="checkbox" name="terminos" id="terminos" value="ok">
 </div>

 <div>
    <input type="submit" value="Enviar">
 </div>
  
</form>



</body>
</html>


