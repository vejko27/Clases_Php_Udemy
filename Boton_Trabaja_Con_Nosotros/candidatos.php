<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trabaja_con_nosotros";

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
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen py-8 px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-2">Panel de Candidatos</h1>
                <p class="text-gray-600">Total de candidatos: <span class="font-bold text-blue-600"><?php echo $total_candidatos; ?></span></p>
            </div>

            <!-- Tabla de candidatos -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <?php if ($total_candidatos > 0): ?>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-blue-600 text-white">
                                <tr>
                                    <th class="px-6 py-3 text-left">ID</th>
                                    <th class="px-6 py-3 text-left">Nombres</th>
                                    <th class="px-6 py-3 text-left">Apellidos</th>
                                    <th class="px-6 py-3 text-left">Email</th>
                                    <th class="px-6 py-3 text-left">Disposición</th>
                                    <th class="px-6 py-3 text-left">Fecha</th>
                                    <th class="px-6 py-3 text-left">Estado</th>
                                    <th class="px-6 py-3 text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($candidatos as $i => $candidato): ?>
                                    <tr class="<?php echo $i % 2 === 0 ? 'bg-gray-50' : 'bg-white'; ?> border-b border-gray-200 hover:bg-blue-50 transition">
                                        <td class="px-6 py-4 font-semibold text-gray-800">#<?php echo htmlspecialchars($candidato['id']); ?></td>
                                        <td class="px-6 py-4 text-gray-700"><?php echo htmlspecialchars($candidato['nombres']); ?></td>
                                        <td class="px-6 py-4 text-gray-700"><?php echo htmlspecialchars($candidato['apellidos']); ?></td>
                                        <td class="px-6 py-4 text-gray-700">
                                            <a href="mailto:<?php echo htmlspecialchars($candidato['email']); ?>" class="text-blue-600 hover:underline">
                                                <?php echo htmlspecialchars($candidato['email']); ?>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">
                                                <?php echo htmlspecialchars(str_replace('-', ' ', ucfirst($candidato['disposicion']))); ?>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-gray-600">
                                            <?php echo date('d/m/Y H:i', strtotime($candidato['fecha_registro'])); ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php 
                                                $estado_colores = array(
                                                    'nuevo' => 'bg-green-100 text-green-800',
                                                    'revisado' => 'bg-blue-100 text-blue-800',
                                                    'rechazado' => 'bg-red-100 text-red-800',
                                                    'seleccionado' => 'bg-yellow-100 text-yellow-800'
                                                );
                                                $clase = isset($estado_colores[$candidato['estado']]) ? $estado_colores[$candidato['estado']] : 'bg-gray-100 text-gray-800';
                                            ?>
                                            <span class="<?php echo $clase; ?> px-3 py-1 rounded-full text-sm font-semibold">
                                                <?php echo ucfirst($candidato['estado']); ?>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <a href="<?php echo htmlspecialchars($candidato['cv_ruta']); ?>" target="_blank" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded text-sm transition">
                                                Descargar CV
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="p-8 text-center">
                        <p class="text-gray-600 text-lg">No hay candidatos registrados aún</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Enlace para volver -->
            <div class="mt-8 text-center">
                <a href="index.html" class="text-blue-600 hover:text-blue-700 font-semibold">← Volver al formulario</a>
            </div>
        </div>
    </div>
</body>
</html>
