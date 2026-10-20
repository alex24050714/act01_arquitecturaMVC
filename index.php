<?php
session_start();

require_once __DIR__.'/app/controller/authController.php';
require_once __DIR__.'/app/controller/usuariController.php';

if(isset($_GET['accion'])){
    $accion = $_GET['accion']
}

?>