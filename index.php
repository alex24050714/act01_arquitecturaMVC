<?php
session_start();

require_once __DIR__.'/app/controller/authController.php';
require_once __DIR__.'/app/controller/usuariController.php';

if(isset($_GET['accio'])){
    $accio = $_GET['accio'];
}else{
    $accio = "login";
}

if($accio = "login"){
    login();
}elseif($accio == "registre"){
    registre();
}elseif($accio == "inici"){
    inici();
}elseif($accio == "logout"){
    logout();
}
?>