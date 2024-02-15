<?php
include_once 'config/parameters.php';
include_once 'config/dataBase.php';

include_once 'modelo/Videojuego.php';
include_once 'modelo/VideojuegoDAO.php';
include_once 'modelo/Usuario.php';
include_once 'modelo/UsuarioDAO.php';
include_once 'modelo/Categoria.php';
include_once 'modelo/CategoriaDAO.php';
include_once 'modelo/JuegosUsuarios.php';
include_once 'modelo/JuegosUsuariosDAO.php';

include_once 'controlador/principalControlador.php';
include_once 'controlador/bibliotecaControlador.php';
include_once 'controlador/usuarioControlador.php';
include_once 'controlador/apiControlador.php';

if(!isset($_GET['controlador'])) {
    // Si la url no contiene un controlador se redirigira automaticamente al controlador principal
    header("Location:".url.'?controlador=principal');
} else {
    $nombre_controlador = $_GET['controlador'].'Controlador';

    if(class_exists($nombre_controlador)) {
        // Comprueba si nos pasa una accion, en caso contrario muestra una accion por defecto.
        $controlador = new $nombre_controlador();

        if(isset($_GET['accion']) && method_exists($controlador,$_GET['accion'])) {
            $accion = $_GET['accion'];
        } else {
            $accion = action_default;
        }

        $controlador->$accion();

    } else {
        header("Location:".url.'?controlador=principal');
    }
}
?>