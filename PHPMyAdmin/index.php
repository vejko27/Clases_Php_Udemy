<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_logueo.css">
</head>

<body>

<div class="contenedor-login">
    <div class="login-box">
        <h1>Extranet SBC</h1>
        <p>Inicia sesión para continuar</p>

        <?php
        $errores = [
            'credenciales' => 'Usuario o contraseña incorrectos.',
            'inactivo' => 'Usuario inactivo. Contacta al administrador.',
        ];
        $err = $_GET['error'] ?? '';
        if (isset($errores[$err])): ?>
            <div class="mensaje-error"><?= $errores[$err] ?></div>
        <?php endif; ?>

        <form action="PHP/login.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</div>

</body>
</html>
