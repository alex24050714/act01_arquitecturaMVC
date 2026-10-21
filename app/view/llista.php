<html>
    <head>
        <title>Llista d'usuaris</title>
    </head>
    <body>
        <h2>Llista d'usuaris</h2>
        <?php
            if ($num_files == 0){
        ?>
                <p> No hay usuarios disponibles <p>
        <?php
            }else{       
        ?>
        <table border="1">
            <tr>
                <th>Usuari</th>
                <th>Nom</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
            <?php
                while ($fila = mysqli_fetch_assoc($resultats)){
                    echo "<tr>";
                }  
            ?>
        </table>
        <?php
        }
        ?>
    </body>
</html>