<?php
    include_once 'modelo/VideojuegoDAO.php';

    class apiControlador {
        public static function mostrarVideojuegos() {
            $videojuegos = VideojuegoDAO::getAllVideojuegos();
            $videojuegos = json_encode($videojuegos, JSON_UNESCAPED_UNICODE);
            header('Content-Type: application/json');
            echo $videojuegos;
            return;
        }
    }
?>