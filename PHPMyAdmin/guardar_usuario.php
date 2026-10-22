<?php

require 'bd_conexion.php';

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = password_hash(
    $_POST['password'],
    PASSWORD_DEFAULT
);

$rol_id = $_POST['rol_id'];

$sql = "INSERT INTO usuarios
        (nombre,usuario,password,rol_id)
        VALUES (?,?,?,?)";

$stmt = $conexion->prepare($sql);

$stmt->bind_param(
    "sssi",
    $nombre,
    $usuario,
    $password,
    $rol_id
);

if($stmt->execute()){

    echo "<h2>✅ Usuario guardado correctamente</h2>";
    echo "<p>Redireccionando al panel...</p>";

    header("refresh:3;url=dashboard.php");
}

?>