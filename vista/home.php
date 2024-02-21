<!DOCTYPE html PUBLIC>
<html lang="es">
<head>
    <title>Home - Aprende Jugando</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link href="assets/css/home.css" rel="stylesheet" type="text/css" media="screen">

</head>
<body>
    <section class="mainContainer">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/mathland.svg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/minecraft.webp" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/oncity.jpg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="sr-only">Siguiente</span>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                
            </a>
        </div>
        <div class="section-title">
            <h2 class="">Juegos destacados</h2>
        </div>
        <div class="seccion-contenido">
        <?php
            foreach ($videojuegos as $videojuego) {
        ?>
        <a href="?controlador=biblioteca&accion=game&videojuego_id=<?= $videojuego->getVideojuego_id() ?>" class="elemento">
            <div class="containerImagen" style="background-image: url(assets/images/<?=$videojuego->getImg()?>)"></div>
            <div class="containerElemento">
                <p class="primary p-no-margin"><?= $videojuego->getNombre() ?></p>
            </div>
        </a>
        <?php
            }
        ?>
        </div>
        
    </section>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>

</body>