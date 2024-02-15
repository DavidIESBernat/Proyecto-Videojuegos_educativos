<?php
    include_once 'modelo/Categoria.php';

    class CategoriaDAO {
        public static function getCategoriaById($categoriaVideojuego) {
            $con = database::connect();

            $result = $con->query("SELECT * FROM `categorias` WHERE `categoria_id` = $categoriaVideojuego;");
            $categoria = $result->fetch_object('Categoria');
            return $categoria;
        }
    }
?>