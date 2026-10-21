<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trabaja_con_SBC";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$conn->set_charset("utf8");

// Obtener candidatos
$sql = "SELECT id, nombres, apellidos, email, disposicion, fecha_registro, estado, cv_ruta FROM candidatos ORDER BY fecha_registro DESC";
$resultado = $conn->query($sql);

if (!$resultado) {
    die("Error en la consulta: " . $conn->error);
}

$candidatos = $resultado->fetch_all(MYSQLI_ASSOC);
$total_candidatos = count($candidatos);
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - Candidatos</title>
    <link rel="stylesheet" href="../syles_tnosotros.css">
</head>
<body class="admin-page">
    <main class="admin-container">
            <!-- Header -->
            <header class="admin-header">
                <h1>Panel de Candidatos</h1>
                <div class="header-accent"></div>
                <p>Total de candidatos: <span class="candidate-total"><?php echo $total_candidatos; ?></span></p>
            </header>

            <!-- Tabla de candidatos -->
            <section class="candidate-card">
                <?php if ($total_candidatos > 0): ?>
                    <div class="table-wrapper">
                        <table class="candidate-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Email</th>
                                    <th>Puesto solicitado</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th class="actions-heading">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($candidatos as $i => $candidato): ?>
                                    <tr>
                                        <td class="candidate-id" data-label="ID">#<?php echo htmlspecialchars($candidato['id']); ?></td>
                                        <td data-label="Nombres"><?php echo htmlspecialchars($candidato['nombres']); ?></td>
                                        <td data-label="Apellidos"><?php echo htmlspecialchars($candidato['apellidos']); ?></td>
                                        <td data-label="Email">
                                            <a href="mailto:<?php echo htmlspecialchars($candidato['email']); ?>" class="candidate-email">
                                                <?php echo htmlspecialchars($candidato['email']); ?>
                                            </a>
                                        </td>
                                        <td data-label="Puesto solicitado">
                                            <span class="position-badge">
                                                <?php echo htmlspecialchars(str_replace('-', ' ', ucfirst($candidato['disposicion']))); ?>
                                            </span>
                                        </td>
                                        <td class="candidate-date" data-label="Fecha">
                                            <?php echo date('d/m/Y H:i', strtotime($candidato['fecha_registro'])); ?>
                                        </td>
                                        <td data-label="Estado">
                                            <?php
                                                $estados_validos = array('nuevo', 'revisado', 'rechazado', 'seleccionado');
                                                $estado = in_array($candidato['estado'], $estados_validos, true)
                                                    ? $candidato['estado']
                                                    : 'desconocido';
                                            ?>
                                            <span class="candidate-status status-<?php echo htmlspecialchars($estado); ?>">
                                                <?php echo htmlspecialchars(ucfirst($candidato['estado'])); ?>
                                            </span>
                                        </td>
                                        <td class="candidate-actions" data-label="Acciones">
                                            <a href="<?php echo htmlspecialchars('../' . $candidato['cv_ruta']); ?>" target="_blank" rel="noopener noreferrer" class="download-button">
                                                Descargar CV
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="empty-state">
                        <p>No hay candidatos registrados aún</p>
                    </div>
                <?php endif; ?>
            </section>

            <!-- Enlace para volver -->
            <div class="back-link">
                <a href="../index.html">← Volver al formulario</a>
            </div>
    </main>
</body>
</html>
