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

        public static function crearUsuario() {
            if (isset($_POST['correo'], $_POST['contraseña'], $_POST['confirmar_contraseña'], $_POST['nombre'], $_POST['apellido'], $_POST['fecha_nacimiento'])) {
                $correo = $_POST['correo']; 
                $contraseña = $_POST['contraseña'];
                $confirmar_contraseña = $_POST['confirmar_contraseña']; 
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $fecha_nacimiento = $_POST['fecha_nacimiento'];

                UsuarioDAO::crearUsuario($correo, $contraseña, $confirmar_contraseña, $nombre, $apellido, $fecha_nacimiento);
                header('Location:'.url.'?controlador=usuario&accion=paginaIniciarSesion');
            } else {
                header('Location:'.url.'?controlador=usuario&accion=paginaRegistro');
            }
        }

        // Viajar entre las páginas de mi cuenta
        public static function bibliotecaJuegos() {
            
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                $juegos_usuarios = JuegosUsuariosDAO::getAllJuegosUsuarios();
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

        public static function modificarDatosUsuario() {
            if (isset($_POST['correo'], $_POST['contraseña'], $_POST['confirmar_contraseña'], $_POST['nombre'], $_POST['apellido'], $_POST['fecha_nacimiento'])) {
                $correo = $_POST['correo']; 
                $contraseña = $_POST['contraseña'];
                $confirmar_contraseña = $_POST['confirmar_contraseña']; 
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $fecha_nacimiento = $_POST['fecha_nacimiento'];
                $id_usuario = $_SESSION['Usuario']->getId_usuario();
            
                if ($contraseña == $confirmar_contraseña) {
                    UsuarioDAO::modificarDatos($correo, $contraseña, $confirmar_contraseña, $nombre, $apellido, $fecha_nacimiento, $id_usuario);
                    header('Location:'.url.'?controlador=usuario');
                } else {
                    header('Location:'.url.'?controlador=usuario&accion=modificarDatos&error=Las contraseñas no coinciden');
                }
            } else {
                header('Location:'.url.'?controlador=usuario&accion=modificarDatos');
            }
        }
    }
?>