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

        public static function iniciarSesion() {
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/header.php';
                include_once 'vista/usuario/inicioSesion.php';
                include_once 'vista/footer.php';
            }
        }

        public static function registro() {
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/header.php';
                include_once 'vista/usuario/crearCuenta.php';
                include_once 'vista/footer.php';
            }
        }

        // Viajar entre las páginas de mi cuenta
        public static function bibliotecaJuegos() {
            
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                $usuarios = UsuarioDAO::getAllUsuarios();

                include_once 'vista/header.php';
                include_once 'vista/usuario/juegosCliente.php';
                include_once 'vista/footer.php';
            }
        }

        public static function modificarDatos() {
            
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                $usuarios = UsuarioDAO::getAllUsuarios();

                include_once 'vista/header.php';
                include_once 'vista/usuario/modificarDatosCliente.php';
                include_once 'vista/footer.php';
            }
        }
    }
?>