<?php
$paginaActiva = 'dashboard';
$tituloPagina = 'Panel Principal';
require 'layout_inicio.php';
?>

<h1>Bienvenido, <?= htmlspecialchars($_SESSION['nombre']) ?></h1>
<p class="subtitulo">Selecciona una opción para comenzar.</p>

<?php if ($esAdmin): ?>
<div class="grid">
    <a class="tarjeta-acceso" href="usuarios.php">
        <h3>Usuarios y roles</h3>
        <p>Crea usuarios y asigna sus roles.</p>
    </a>
    <a class="tarjeta-acceso" href="registrar.php">
        <h3>Registrar usuario</h3>
        <p>Formulario rápido de alta.</p>
    </a>
    <a class="tarjeta-acceso" href="permisos.php">
        <h3>Permisos</h3>
        <p>Gestión de permisos por módulo.</p>
    </a>
</div>
<?php else: ?>
<div class="card"><p>Has iniciado sesión correctamente.</p></div>
<?php endif; ?>

<?php require 'layout_fin.php'; ?>
