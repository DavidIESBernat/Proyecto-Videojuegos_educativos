<?php
    include_once 'Usuario.php';

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
    }
?>