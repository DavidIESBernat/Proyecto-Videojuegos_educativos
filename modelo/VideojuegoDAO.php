<?php
    include_once 'Videojuego.php';
    include_once 'config/dataBase.php';

    class VideojuegoDAO {
        public static function getAllVideojuegos() {
            $con = dataBase::connect();
                    
            if ($result = $con->query("SELECT * FROM videojuegos")) {    
                $videojuegos = array();
                    
                while ($videojuego = $result->fetch_assoc()) {
                    $videojuegos[] = $videojuego;
                }
                return $videojuegos;
            }
        }
        
        public static function getVideojuegoById($id) {
            $con = database::connect();

            $result = $con->query("SELECT * FROM `videojuegos` WHERE `videojuego_id` = $id;");
            $videojuego = $result->fetch_object('Videojuego');
            return $videojuego;
        }

        public static function videojuegoJugado($videojuego_id, $usuario_id) {
            $con = dataBase::connect();
            
            $result = $con->query("SELECT COUNT(*) AS total FROM `juegos_usuarios` WHERE `juego_id` = '$videojuego_id' AND `usuario_id` = '$usuario_id'");
            $row = $result->fetch_assoc();
            $total = $row['total'];
        
            if ($total == 0) {
                $con->query("INSERT INTO `juegos_usuarios` (`juego_id`, `usuario_id`) VALUES ('$videojuego_id','$usuario_id')");
            } else {
                header('Location:'.url.'?controlador=biblioteca');
            }
        }
        
    }
?>