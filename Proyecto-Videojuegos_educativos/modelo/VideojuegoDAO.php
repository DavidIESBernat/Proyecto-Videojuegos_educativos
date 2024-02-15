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
        
        // public static function getAllVideojuegos() {
        //     $con = dataBase::connect();
                    
        //     if ($result = $con->query("SELECT * FROM videojuegos")) {    
        //         $videojuegos = array();
                    
        //         while ($videojuego = $result->fetch_object('Videojuego')) {
        //             $videojuegos[] = $videojuego;
        //         }
        //         return $videojuegos;
        //     }
        // }
    }
?>