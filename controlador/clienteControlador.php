<?php
    include_once 'modelo/UsuarioDAO.php';

    class clienteControlador {
        public static function index() {
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                $usuarios = UsuarioDAO::getAllUsuarios();

                include_once 'vista/header.php';
                include_once 'vista/usuario/informacion.php';
                include_once 'vista/footer.php';
            }
        }
    }
?>