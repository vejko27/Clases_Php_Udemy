<?php

session_start();
require 'bd_conexion.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = $conexion->prepare($sql);

    $stmt->bind_param("s", $usuario);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {

        $user = $resultado->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['id_usuario'] = $user['id'];
            $_SESSION['rol_id'] = $user['rol_id'];
            $_SESSION['nombre'] = $user['nombre'];

            header("Location: dashboard.php");
            exit;
        }
    }

    echo "Usuario o contraseña incorrectos";
}
?>