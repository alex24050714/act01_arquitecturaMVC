<?php
require_once __DIR__.'/../model/usuari.php';

function login() {
    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $model = new Usuari();

        $resultats = $model->buscarUsuari($_POST['usuario']);
        $num_files = mysqli_num_rows($resultats);

        if($num_files == 0){
            $error ="Usuario o contrasenya incorrectes";
        }else{
            $fila = mysqli_fetch_assoc($resultats);

            if(password_verify($_POST['password'], $fila['contrasenya'])){
                $_SESSION['usuario'] = $fila['usuario'];
                $_SESSION['rol'] = $fila['rol'];
                header("location: index.php?accion=inici");
                exit;
            }else{
                $error = "Usuari o contrasenya incorrectes";
            }
        }
    }

    require __DIR__ . '/../view/login.php';
}

function registre(){
    global $conexio;
    $missatge = "";
    $error = "";

    if($_SERVER['REQUEST_METHOD']== "POST"){
        $model = new Usuari();

        $resultats = $model->buscarUsuari($_POST['usuario']);
        $num_files = mysqli_num_rows($resultats);

        if($num_files > 0){
            $missatge = "El usuari ja existeix";
        }else{
            $usuari=$_POST['usuario'];
            $nombre=$_POST['nombre'];
            $apellidos=$_POST['apellidos'];
            $email=$_POST['email'];
            $rol=$_POST['rol'];
            $hash=password_hash($_POST['contrasenya'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuarios (usuario, nombre, apellidos, email, rol, contrasenya) values ('$usuari', '$nombre', '$apellidos', '$email', '$rol', '$hash')";

            mysqli_query($conexio, $sql);

            $missatge = "Usuario registrado correctament";
        }
    }
    require __DIR__ . '/../view/registre.php';
}

function logout(){
    session_unset();
    session_destroy();
    header("location: index.php");
    exit;
}
?>