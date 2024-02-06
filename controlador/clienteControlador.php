<?php
    class clienteControlador {
        public static function index() {
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/header.php';
                include_once 'vista/cliente.php';
                include_once 'vista/footer.php';
            }
        }
    }
?>