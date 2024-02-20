<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="assets/css/header.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/css/cliente.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/css/global.css" rel="stylesheet" type="text/css" media="screen">
    <title>Registro</title>
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center cuerpo">
                <div class="col-sm-12 col-md-12 col-lg-4 columnas">
                    <ul>
                        <a href="?controlador=usuario"><li>Mi cuenta</li></a>
                        <a href="?controlador=usuario&accion=bibliotecaJuegos"><li class="active">Biblioteca</li></a>
                        <a href="?controlador=usuario&accion=modificarDatos"><li>Modificar datos</li></a>
                        <a href="controlador/cerrarSesion.php"><li>Cerrar sesión</li></a>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8 columnas principal">
                    <h1>Biblioteca del usuario</h1>
                    <?php
                        foreach($juegos_usuarios as $juego_usuario) {
                            if ($juego_usuario->getUsuario_id() == $id_usuario) {
                                $id = $juego_usuario->getJuego_id();
                                $videojuego = VideojuegoDAO::getVideojuegoById($id);
                    ?>
                    <div class="div-juego">
                        <p class="p-juego"><?= $videojuego->getNombre() ?></p>
                        <a href="?controlador=biblioteca&accion=game&videojuego_id=<?=$videojuego->getVideojuego_id()?>">Jugar</a>
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
