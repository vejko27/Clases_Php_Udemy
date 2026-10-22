<form action="guardar_usuario.php" method="POST">

    <input type="text" name="nombre" placeholder="Nombre y apellido">

    <input type="text" name="usuario" placeholder="ingresar usuario">

    <input type="password" name="password" placeholder="ingresar contraseña">

    <select name="rol_id">

        <option value="1">Administrador</option>
        <option value="2">Operativo</option>
        <option value="3">Gestión</option>

    </select>

    <button type="submit">
        Guardar
    </button>

</form>