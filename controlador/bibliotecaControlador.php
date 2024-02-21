<?php

    include_once 'modelo/Usuario.php';
    include_once 'modelo/UsuarioDAO.php';
    include_once 'modelo/Categoria.php';
    include_once 'modelo/CategoriaDAO.php';
    include_once 'modelo/Videojuego.php';
    include_once 'modelo/VideojuegoDAO.php';
    include_once 'modelo/JuegosUsuario.php';
    include_once 'modelo/JuegosUsuarioDAO.php';
    
    class bibliotecaControlador {
        public static function index() {
            if (!isset($_GET['controlador'])) {
                include_once 'vista/home.php';
            } else {
                $videojuegos = VideojuegoDAO::getAllVideojuegos();

                include_once 'vista/header.php';
                include_once 'vista/biblioteca.php';
                include_once 'vista/footer.php';
            } 
        }

        public static function game() {
            $id = $_GET['videojuego_id'];
            
            $videojuego = VideojuegoDAO::getVideojuegoById($id);

            $categoriaVideojuego = $videojuego->getCategoria_id();
            $categoria = CategoriaDAO::getCategoriaById($categoriaVideojuego);

            include_once 'vista/header.php';
            include_once 'vista/game.php';
            include_once 'vista/footer.php'; 
        }

        public static function videojuegoJugado() {
            if (isset($_SESSION['Usuario'])) {
                $videojuego_id = $_POST['videojuego_id'];
                $usuario_id = $_SESSION['Usuario']->getId_usuario();
                VideojuegoDAO::videojuegoJugado($videojuego_id, $usuario_id);
                header('Location: ' . url . '?controlador=biblioteca&accion=game&videojuego_id=' . $videojuego_id);
            } else {
                include_once 'vista/header.php';
                include_once 'vista/usuario/inicioSesion.php';
                include_once 'vista/footer.php';
            }
        }        
    }
?>