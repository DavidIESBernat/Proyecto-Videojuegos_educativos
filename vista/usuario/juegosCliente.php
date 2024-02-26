<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/cliente.css" rel="stylesheet" type="text/css" media="screen">
    <title>Juegos jugados - Aprende Jugando</title>
</head>
<body>
    <div class="container-fluid mainContainer">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center cuerpo">
                <div class="col-12 col-md-4 columnas">
                    <ul>
                        <a href="?controlador=usuario"><li>Mi cuenta</li></a>
                        <a href="?controlador=usuario&accion=bibliotecaJuegos"><li class="active">Biblioteca</li></a>
                        <a href="?controlador=usuario&accion=modificarDatos"><li>Modificar datos</li></a>
                        <a href="?controlador=usuario&accion=paginaModificarContraseña"><li>Modificar Contraseña</li></a>
                        <a href="?controlador=usuario&accion=logout"><li>Cerrar sesión</li></a>
                    </ul>
                </div>
                <div class="col-12 col-md-8 columnas principal row">
                    <h1>Mi biblioteca de juegos</h1>
                    <?php
                        foreach($juegos_usuarios as $juego_usuario) {
                            if ($juego_usuario->getUsuario_id() == $id_usuario) {
                                $id = $juego_usuario->getJuego_id();
                                $videojuego = VideojuegoDAO::getVideojuegoById($id);
                                $visitas_totales = VideojuegoDAO::obtenerVisitasUsuario($id_usuario, $id);
                    ?>
                    <div class="div-juego row">
                        <div class="row">
                            <p class="p-juego p-no-margin col-12 col-md-6"><?= $videojuego->getNombre() ?></p>
                            <p class="p-juego p-no-margin col-12 col-md-6 flex-end">Veces jugado: <?=$visitas_totales?></p>
                        </div>
                        <a class="btnSimple boton" href="?controlador=biblioteca&accion=game&videojuego_id=<?=$videojuego->getVideojuego_id()?>">Jugar</a>
                    </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>