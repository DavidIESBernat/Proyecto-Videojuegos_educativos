<?php
    include_once 'Videojuego.php';

    class VideojuegoDAO {
        public static function getAllVideojuegos() {
            $con = dataBase::connect();
                    
            if ($result = $con->query("SELECT * FROM videojuegos")) {    
                $videojuegos = array();
                    
                while ($videojuego = $result->fetch_object('Videojuego')) {
                    $videojuegos[] = $videojuego;
                }
                return $videojuegos;
            }
        }
    }
?>