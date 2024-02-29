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
            if (!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
                $correo = $_POST['correo'];
                $contraseña = $_POST['contraseña'];

                UsuarioDAO::iniciarSesion($correo, $contraseña);
                header('Location:'.url.'?controlador=usuario&error=2');
            } else {
                header('Location:' . url . '?controlador=usuario&accion=paginaIniciarSesion&error=2');
            }
        }

        public static function crearUsuario() {
            if (!empty($_POST['correo']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['contraseña']) && !empty($_POST['confirmar_contraseña']) && !empty($_POST['fecha_nacimiento'])) {
                $correo = $_POST['correo']; 
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $contraseña = $_POST['contraseña'];
                $confirmar_contraseña = $_POST['confirmar_contraseña'];
                $fecha_nacimiento = $_POST['fecha_nacimiento'];
        
                UsuarioDAO::crearUsuario($correo, $nombre, $apellido, $contraseña, $confirmar_contraseña, $fecha_nacimiento);
                header('Location:'.url.'?controlador=usuario&accion=paginaIniciarSesion&error=1');
            } else {
                header('Location:'.url.'?controlador=usuario&accion=paginaRegistro&error=1');
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
            if (isset($_POST['correo'], $_POST['nombre'], $_POST['apellido'], $_POST['fecha_nacimiento'])) {
                $correo = $_POST['correo']; 
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $fecha_nacimiento = $_POST['fecha_nacimiento'];
                $id_usuario = $_SESSION['Usuario']->getId_usuario();
            
                UsuarioDAO::modificarDatos($correo, $nombre, $apellido, $fecha_nacimiento, $id_usuario);
                
            } else {
                header('Location:'.url.'?controlador=usuario&accion=modificarDatos');
            }
        }

        public static function paginaModificarContraseña() {
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                $usuarios = UsuarioDAO::getAllUsuarios();
                $id_usuario = $_SESSION['Usuario']->getId_usuario();

                include_once 'vista/header.php';
                include_once 'vista/usuario/modificarContraseña.php';
                include_once 'vista/footer.php';
            }
        }

        public static function modificarContraseña() {
            if (isset($_POST['contraseña_actual'], $_POST['contraseña_nueva'], $_POST['repetir_contraseña_nueva'])) {
                $contraseña_actual = $_POST['contraseña_actual'];
                $contraseña_nueva = $_POST['contraseña_nueva'];
                $repetir_contraseña_nueva = $_POST['repetir_contraseña_nueva'];
                $id_usuario = $_SESSION['Usuario']->getId_usuario();

                UsuarioDAO::modificarContraseña($contraseña_actual, $contraseña_nueva, $repetir_contraseña_nueva, $id_usuario);
            } else {
                header('Location:' . url . '?controlador=usuario&accion=paginaModificarContraseña&error=3');
            }

        }
    }
?>