<!DOCTYPE html PUBLIC>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="assets/css/game.css" rel="stylesheet" type="text/css" media="screen">
    
</head>
<body>
    <div class="containerGame flex-column">
        <div class="containerGameTop">
            <a href="?controlador=biblioteca" class="btnVolver"><span class="flecha"><</span> Volver</a>
        </div>
        <div class="containerGameBottom ">
            <div class="containerGameContent">
                <div class="containerGameIzquierdo ">
                    <div class="elemento">
                        <div class="containerImagen" style="background-image: url(assets/images/<?= $videojuego->getImg() ?>)"></div>
                    </div>
                </div>
                <div class="containerGameDerecho flex-column">
                    <div class="containerText">
                        <p class="categoria p-no-margin">Categoria: <span class="categoriaNombre"><?= $categoria->getNombre_categoria() ?></span></p>
                        <h1 class="titulo p-no-margin"><?= $videojuego->getNombre() ?></h1>
                    </div>
                    <div class="containerDescription">
                        <p class="descripcion p-no-margin">Descripcion: <span><?= $videojuego->getDescripcion() ?></span></p>
                        <p class="descripcion p-no-margin">Visitas totales: <span><?= $videojuego->getVisitas() ?></span></p>
                    </div>
                    <div class="containerBtn flex-row">
                        <form action="?controlador=biblioteca&accion=videojuegoJugado" method="post">
                            <input type="hidden" name="videojuego_id" value="<?= $videojuego->getVideojuego_id() ?>">
                            <input type="submit" class="btnGame" value="Jugar">
                            <input type="submit" class="btnGame" value="Descargar">
                        </form>
                    </div> 
                </div>
                
            </div>
        </div>
    </div>
</body>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>