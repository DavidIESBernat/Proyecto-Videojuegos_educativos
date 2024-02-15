<?php
    include_once 'modelo/Usuario.php';
    include_once 'config/dataBase.php';

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
    }
?>