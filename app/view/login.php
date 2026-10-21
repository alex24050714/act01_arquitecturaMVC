<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="index.php?accion=login">
            Usuari: <input type="text" name="usuari">
            <br>
            Contrasenya: <input type="password" name="password">
            <br>
            <input type="submit" name="Enviar" value="Entrar">
        </form>
        <?php echo $error ?? ''; ?>
        <br>
        <a href="index.php?accion=registre">Crear conta</a>
    </body>
</html>