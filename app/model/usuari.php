<?php

require_once __DIR__ . '/conexio.php';

    class Usuari {

        public function buscarUsuari($usuari) {
            global $conexio;
            $sql = "SELECT * FROM usuarios WHERE usuari = '$usuari'";
            return $conexio->query($sql);          
        }
    }
?>
