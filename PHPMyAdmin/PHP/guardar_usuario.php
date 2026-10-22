<?php
require 'auth.php';
require 'bd_conexion.php';

if ((int)$_SESSION['rol_id'] !== 1) {
    http_response_code(403);
    exit('Acceso denegado');
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../registrar.php');
    exit;
}

$nombre = trim($_POST['nombre'] ?? '');
$usuario = trim($_POST['usuario'] ?? '');
$password = $_POST['password'] ?? '';
$rol_id = (int)($_POST['rol_id'] ?? 0);

if ($nombre === '' || $usuario === '' || $password === '' || $rol_id <= 0) {
    header('Location: ../registrar.php?msg=error');
    exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conexion->prepare("INSERT INTO usuarios (nombre,usuario,password,rol_id) VALUES (?,?,?,?)");
$stmt->bind_param("sssi", $nombre, $usuario, $hash, $rol_id);

header('Location: ../registrar.php?msg=' . ($stmt->execute() ? 'ok' : 'error'));
exit;
