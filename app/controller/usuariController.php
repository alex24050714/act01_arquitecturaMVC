<?php
require_once __DIR__.'/../model/usuari.php';

function inici(){
    global $conexio;

    if(!isset($_SESSION['usuari'])){
        header("location: index.php");
        exit;
    }
    if($_SESSION['rol'] == "admin"){
        $sql = "select * from usuarios";
        $resultats = mysqli_query($conexio, $sql);
        $num_files = mysqli_num_rows($resultats);

        require __DIR__.'/../view/llista.php';
    }else {
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST['email'];
            $usuari = $_SESSION['usuari'];
            $sql = "update usuarios set email = '$email' where usuari = '$usuari'";
            mysqli_query($conexio, $sql);
        }

        $model = new Usuari();
        $resultats = $model->buscarUsuari($_SESSION['usuari']);
        $fila = mysqli_fetch_assoc($resultats);

        require __DIR__ . '/../view/perfil.php';
    }
}
?>