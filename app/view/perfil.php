<html>
    <head>
        <title>Perfil</title>
    </head>
<body>
    <?php
        if (isset($fila)) {
    ?>
    <form method="post" action="index.php?accion=inici">
        Usuari: <input type="text" name="usuari" value="<?php echo $fila['usuari'] ?? '';?>" readonly>
        <br>
        Nombre: <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" readonly>
        <br>
        Apellidos: <input type="text" name="apellidos" value="<?php echo $fila['apellidos']; ?>" readonly>
        <br>
        Email: <input type="text" name="email" value="<?php echo $fila['email']; ?>" readonly>
        <br>
        <input type="submit" name="Enviar" value="Guardar">
    </form>
    <?php
        } else {
            echo "No s'han pogut carregar les dades DAAAAAH";
        }
    ?>
    <br>
    <a href="index.php?accio=logout">Tancar la sessió</a>
</body>
</html>