<?php
    session_start();

    include_once 'modelo/Usuario.php';
    include_once 'modelo/UsuarioDAO.php';


    class usuarioControlador {
        public static function index() {
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                $usuarios = UsuarioDAO::getAllUsuarios();
                $id_usuario = $_SESSION['Usuario']->getId_usuario();

                include_once 'vista/header.php';
                include_once 'vista/usuario/informacion.php';
                include_once 'vista/footer.php';
            }
        }

        public static function paginaIniciarSesion() {
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/header.php';
                include_once 'vista/usuario/inicioSesion.php';
                include_once 'vista/footer.php';
            }
        }

        public static function paginaRegistro() {
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/header.php';
                include_once 'vista/usuario/crearCuenta.php';
                include_once 'vista/footer.php';
            }
        }

        public static function iniciarSesion() {
            if (isset($_POST['correo'], $_POST['contraseña'])) {
                $correo = $_POST['correo'];
                $contraseña = $_POST['contraseña'];

                UsuarioDAO::iniciarSesion($correo, $contraseña);
                header('Location:'.url.'?controlador=principal');
            }
        }

        // Viajar entre las páginas de mi cuenta
        public static function bibliotecaJuegos() {
            
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                $usuarios = UsuarioDAO::getAllUsuarios();
                $id_usuario = $_SESSION['Usuario']->getId_usuario();

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
                $id_usuario = $_SESSION['Usuario']->getId_usuario();

                include_once 'vista/header.php';
                include_once 'vista/usuario/modificarDatosCliente.php';
                include_once 'vista/footer.php';
            }
        }
        
        public static function logout() {
            session_start(); 
            unset($_SESSION['Usuario']);
            header("Location:".url."?controlador=principal");
        }
    }
?>