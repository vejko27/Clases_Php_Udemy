<?php
// Plantilla común: requiere $paginaActiva y $tituloPagina antes de incluirla
require_once __DIR__ . '/PHP/auth.php';
$esAdmin = (int)($_SESSION['rol_id'] ?? 0) === 1;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($tituloPagina) ?></title>
    <link rel="stylesheet" href="style_panel.css">
</head>
<body>
<div class="layout">
    <aside class="sidebar">
        <div class="marca">Extranet <span>SBC</span></div>
        <nav>
            <a href="dashboard.php" class="<?= $paginaActiva === 'dashboard' ? 'activo' : '' ?>">Inicio</a>
            <?php if ($esAdmin): ?>
                <a href="usuarios.php" class="<?= $paginaActiva === 'usuarios' ? 'activo' : '' ?>">Usuarios y roles</a>
                <a href="registrar.php" class="<?= $paginaActiva === 'registrar' ? 'activo' : '' ?>">Registrar usuario</a>
                <a href="permisos.php" class="<?= $paginaActiva === 'permisos' ? 'activo' : '' ?>">Permisos</a>
            <?php endif; ?>
        </nav>
        <a href="PHP/logout.php" class="salir">Cerrar sesión</a>
    </aside>
    <main class="contenido">
