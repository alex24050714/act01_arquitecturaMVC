<?php

require_once __DIR__ . '/model/conexion.php';

    class Usuari {

        public function buscarUsuari($usuario) {
           global $conexion;
            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
            return $conexion->query($sql);          
        }
    }
?>
