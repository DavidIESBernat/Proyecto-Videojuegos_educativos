<?php
    include_once 'modelo/JuegosUsuarios.php';

    class JuegosUsuariosDAO {
        public static function getAllJuegosUsuarios() {
            $con = dataBase::connect();
                        
            if ($result = $con->query("SELECT * FROM juegos_usuarios")) {    
                $juegos_usuarios = array();
                        
                while ($juego_usuario = $result->fetch_object('JuegosUsuarios')) {
                    $juegos_usuarios[] = $juego_usuario;
                }
                return $juegos_usuarios;
            }
        }
    }
?>