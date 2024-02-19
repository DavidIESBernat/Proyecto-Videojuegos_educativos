<?php
        include_once 'modelo/Usuario.php';
        include_once 'modelo/UsuarioDAO.php';
        include_once 'modelo/Categoria.php';
        include_once 'modelo/CategoriaDAO.php';
        include_once 'modelo/Videojuego.php';
        include_once 'modelo/VideojuegoDAO.php';
        include_once 'modelo/JuegosUsuario.php';
        include_once 'modelo/JuegosUsuarioDAO.php';

    class apiControlador {
        public static function mostrarVideojuegos() {
            $videojuegos = VideojuegoDAO::getAllVideojuegos();
            $videojuegos = json_encode($videojuegos, JSON_UNESCAPED_UNICODE);
            header('Content-Type: application/json');
            echo $videojuegos;
            return;
        }
    }
?>