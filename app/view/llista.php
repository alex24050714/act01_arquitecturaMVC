<html>
    <head>
        <title>Llista d'usuaris</title>
    </head>
    <body>
        <h2>Llista d'usuaris</h2>
        <?php
            if ($num_files == 0){
        ?>
                <p> No hi han usuaris disponibles <p>
        <?php
            }else{       
        ?>
        <table border="1">
            <tr>
                <th>Usuari</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
            <?php
                while ($fila = mysqli_fetch_assoc($resultats)){
                    echo "<tr>";
                    echo "<td>".$fila['usuari']."</td>";
                    echo "<td>".$fila['nombre']."</td>";
                    echo "<td>".$fila['apellidos']."</td>";
                    echo "<td>".$fila['email']."</td>";
                    echo "<td>".$fila['rol']."</td>";
                    echo "<tr>";
                }  
            ?>
        </table>
        <?php
        }
        ?>
        <a href="index.php?accio=logout">Tancar sessió</a>
    </body>
</html>