<?php

require_once __DIR__ . '/model/conexio.php';

    class Usuari {

        public function buscarUsuari($usuario) {
           global $conexio;
            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
            return $conexio->query($sql);          
        }
    }
?>
