<?php
    class bibliotecaControlador {
        public static function index() {
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                $videojuegos = VideojuegoDAO::getAllVideojuegos();

                include_once 'vista/header.php';
                include_once 'vista/biblioteca.php';
                include_once 'vista/footer.php';
            } 
        }
    }
?>