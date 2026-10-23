<html>
    <head>
        <title>Registre</title>
    </head>
    <body>
        <form method="post" action="index.php?accio=registre">
            Usuari: <input type="text" name="usuari">
            <br>
            Nom: <input type="text" name="nombre">
            <br>
            Apellidos: <input type="text" name="apellidos">
            <br>
            Email: <input type="text" name="email">
            <br>
            Rol:
            <select name="rol">
                <option value="usuari">usuari</option>
                <option value="admin">admin</option>
            </select>
            <br>
            Contrasenya: <input type="password" name="password">
            <br>
            <input type="submit" name="Enviar" value="Registrar">
        </form>
        <?php echo $missatge ?? ''; ?>
        <br>
        <a href="index.php?accio=login">Tornar al login</a>
    </body>
</html>