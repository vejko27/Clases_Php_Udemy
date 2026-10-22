<?php
//Usando DB de prueba_datos en este index para un login
session_start();
require 'bd_conexion.php';

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql ="SELECT *FROM usuarios where usuario=?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param('s',$usuario);
$stmt->execute();

$resultado = $stmt->get_result();

if($resultado->num_rows >0){

   $user = $resultado->fetch_assoc();

   if(password_verify($password,$user['password'])){
 
      $_SESSION['id_usuario']= $user['id'];
      $_SESSION['rol_id']= $user['rol_id'];
      $_SESSION['nombre']= $user['nombre'];

      header("Location: dashboard.php");
      exit;
       
   }
}

echo 'Usuario o Contraseña incorrectos';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Usuario">
    <input type="password" name="password" placeholder="Contraseña">
    <button type="submit">Iniciar sesión</button>
</form>
    
</body>
</html>