<?php
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
            $videojuego_id = $_POST['videojuego_id'];
            $usuario_id = $_SESSION['Usuario']->getId_usuario();

            VideojuegoDAO::videojuegoJugado($videojuego_id, $usuario_id);
            header('Location:'.url.'?controlador=biblioteca');
        }
    }
?>