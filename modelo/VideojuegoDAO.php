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

        public static function videojuegosMasJugados() {
            $con = dataBase::connect();
                    
            if ($result = $con->query("SELECT * FROM videojuegos ORDER BY visitas DESC LIMIT 3")) {    
                $videojuegos = array();
                    
                while ($videojuego = $result->fetch_object('Videojuego')) {
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
            
            $con->query("UPDATE `videojuegos` SET `visitas` = `visitas` + 1 WHERE `videojuego_id` =  $videojuego_id");

            $result = $con->query("SELECT COUNT(*) AS total FROM `juegos_usuarios` WHERE `juego_id` = '$videojuego_id' AND `usuario_id` = '$usuario_id'");
            $row = $result->fetch_assoc();
            $total = $row['total'];
        
            if ($total == 0) {
                $con->query("INSERT INTO `juegos_usuarios` (`juego_id`, `usuario_id`, `visitas`) VALUES ('$videojuego_id','$usuario_id', 1)");
            } else {
                $con->query("UPDATE `juegos_usuarios` SET `visitas` = `visitas` + 1 WHERE `juego_id` = '$videojuego_id' AND `usuario_id` = '$usuario_id'");
                header('Location: ' . url . '?controlador=biblioteca&accion=game&videojuego_id=' . $videojuego_id);
            }
        }
        
        public static function obtenerVisitasUsuario($id_usuario, $id) {
            $con = dataBase::connect();
            $result = $con->query("SELECT SUM(visitas) AS total_visitas FROM `juegos_usuarios` WHERE `usuario_id` = '$id_usuario' AND `juego_id` = '$id'");
            $row = $result->fetch_assoc();
            $visitas_totales = $row['total_visitas'];
            return $visitas_totales;
        }
    }
?>