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

            $result = $con->query("SELECT rol FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña' LIMIT 1;");
            $row = $result->fetch_assoc();
            $_SESSION['rolUsuario'] = $row['rol'];

            $result = $con->query("SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña' LIMIT 1;");
            $usuario = $result->fetch_object('Usuario');

            $_SESSION['Usuario'] = $usuario;
        }

        public static function crearUsuario($correo, $contraseña, $confirmar_contraseña, $nombre, $apellido, $fecha_nacimiento) {
            $con = dataBase::connect();
            
            if ($contraseña == $confirmar_contraseña) {
                $con->query("INSERT INTO `usuarios`(`nombre`, `apellido`, `fecha_nacimiento`, `correo`, `contraseña`, `rol`) VALUES ('$nombre','$apellido','$fecha_nacimiento','$correo','$contraseña', 'Cliente')");
            } else {
                header('Location:'.url.'?controlador=usuario&accion=paginaRegistro');
            }
        }

        public static function modificarDatos($correo, $contraseña, $confirmar_contraseña, $nombre, $apellido, $fecha_nacimiento, $id_usuario) {
            $con = dataBase::connect();
            
            $con->query("UPDATE usuarios SET `correo` = '$correo', `contraseña` = '$contraseña', `nombre` = '$nombre', `apellido` = '$apellido', `fecha_nacimiento` = '$fecha_nacimiento' WHERE id_usuario = '$id_usuario'");   
        }
    }
?>