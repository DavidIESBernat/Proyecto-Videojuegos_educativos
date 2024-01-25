<?php
// Funcion que devuelve la conexion con la base de datos con tan solo llamarla
class DataBase {
    public static function connect($host='localhost',$user='root',$pwd='',$db='bd_videojuegos') {
        $conexion = new mysqli($host,$user,$pwd,$db);
        if($conexion == false){
            die('DATABASE ERROR');
        } 
            return $conexion;
    }
}
?>