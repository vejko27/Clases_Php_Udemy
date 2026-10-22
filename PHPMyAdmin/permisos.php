<?php
$paginaActiva = 'permisos';
$tituloPagina = 'Gestión de permisos';
require 'layout_inicio.php';

if (!$esAdmin) {
    http_response_code(403);
    exit('Acceso denegado');
}
?>

<h1>Gestión de permisos</h1>
<p class="subtitulo">Permisos por rol y módulo.</p>

<div class="card"><p>Sección en construcción.</p></div>

<?php require 'layout_fin.php'; ?>
