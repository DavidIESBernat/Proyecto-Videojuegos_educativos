<?php
    include_once 'modelo/Usuario.php';

    class UsuarioDAO {
        public static function getAllUsuarios() {
            $con = dataBase::connect();
                    
            if ($result = $con->query("SELECT * FROM usuarios")) {    
                $usuarios = array();
                    
                while ($usuario = $result->fetch_object('Usuario')) {
                    $usuarios[] = $usuario;
                }
                return $usuarios;
            }
        }

        public static function iniciarSesion($correo, $contraseña) {
            $con = dataBase::connect();

            $result = $con->query("SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña' LIMIT 1;");
            $usuario = $result->fetch_object('Usuario');

            if ($usuario != null) {
                $_SESSION['Usuario'] = $usuario;
                header('Location:'.url.'?controlador=usuario&error=2');
            } else {
                header('Location:' . url . '?controlador=usuario&accion=paginaIniciarSesion&error=3');
            }
        }

        public static function crearUsuario($correo, $nombre, $apellido, $contraseña, $confirmar_contraseña, $fecha_nacimiento) {
            $con = dataBase::connect();
            
            if ($contraseña == $confirmar_contraseña) {
                $con->query("INSERT INTO `usuarios`(`nombre`, `apellido`, `fecha_nacimiento`, `correo`, `contraseña`, `rol`) VALUES ('$nombre','$apellido','$fecha_nacimiento','$correo','$contraseña', 'Cliente')");
            } else {
                header('Location:'.url.'?controlador=usuario&accion=paginaRegistro');
            }
        }

        public static function modificarDatos($correo, $nombre, $apellido, $fecha_nacimiento, $id_usuario) {
            $con = dataBase::connect();
            
            $con->query("UPDATE usuarios SET `correo` = '$correo', `nombre` = '$nombre', `apellido` = '$apellido', `fecha_nacimiento` = '$fecha_nacimiento' WHERE id_usuario = '$id_usuario'");   
            header('Location:' . url . '?controlador=usuario&error=1');
        }

        public static function modificarContraseña($contraseña_actual, $contraseña_nueva, $repetir_contraseña_nueva, $id_usuario) {
            $con = dataBase::connect();
            $result = $con->query("SELECT contraseña FROM usuarios WHERE id_usuario = '$id_usuario'");
            $row = $result->fetch_assoc();
            $contraseña_actual_bbdd = $row['contraseña'];
        
            if ($contraseña_actual_bbdd == $contraseña_actual) {
                if ($contraseña_nueva == $repetir_contraseña_nueva) {
                    $con->query("UPDATE usuarios SET `contraseña` = '$contraseña_nueva' WHERE id_usuario = '$id_usuario'");
                    header('Location:' . url . '?controlador=usuario&error=0');
                } else {
                    header('Location:' . url . '?controlador=usuario&accion=paginaModificarContraseña&error=2');
                }
            } else {
                header('Location:' . url . '?controlador=usuario&accion=paginaModificarContraseña&error=1');
            }   
        }
        
    }
?>