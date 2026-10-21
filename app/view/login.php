<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="index.php?accio=login">
            Usuari: <input type="text" name="usuari">
            <br>
            Contrasenya: <input type="passsword" name="password">
            <br>
            <input type="submit" name="Enviar" value="Entrar">
        </form>
        <?php echo $error; ?>
        <br>
        <a href="index.php?accio=registre">Crear conta</a>
    </body>
</html>