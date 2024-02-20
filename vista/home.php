<!DOCTYPE html PUBLIC>
<html lang="es">
<head>
    <title>Inicio - Aprende Jugando</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link href="assets/css/home.css" rel="stylesheet" type="text/css" media="screen">

</head>
<body>
    <section class="mainContainer row no-margin-row">
        <div id="carouselExampleIndicators" class="carousel slide col-12" data-ride="carousel">
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
        <div class="section-title col-12">
            <h2 class="">Juegos destacados</h2>
        </div>
        <div class="seccion-contenido col-12 row no-margin-row">
            <a href="" class="elemento col-4">
                <div class="containerImagen" style="background-image: url(assets/images/placeholder.jpg)"></div>
                <div class="containerElemento">
                    <p class="primary p-no-margin">Placeholder</p>
                </div>
            </a>
            <a href="" class="elemento col-4">
                <div class="containerImagen" style="background-image: url(assets/images/oncity.jpg)"></div>
                <div class="containerElemento">
                    <p class="primary p-no-margin">Placeholder</p>
                </div>
            </a>
            <a href="" class="elemento col-4">
                <div class="containerImagen" style="background-image: url(assets/images/logoProvisional.svg)"></div>
                <div class="containerElemento">
                    <p class="primary p-no-margin">Placeholder</p>
                </div>
            </a>
        </div>
        <!--<div class="section-title col-12">
            <h2 class="">Siguenos en redes sociales</h2>
        </div>
        <div class="seccion-contenido col-12 row no-margin-row">
            <a class="containerRSS col-4"><img class="img-rss" src="assets/images/twitter.svg" alt="Twitter"></a>
            <a class="containerRSS col-4"><img class="img-rss" src="assets/images/instagram.svg" alt="Instagram"></a>
            <a class="containerRSS col-4"><img class="img-rss" src="assets/images/youtube.svg" alt="Youtube"></a>
        </div>-->
        <div class="section-title col-12">
            <h2 class="">Juegos añadidos recientemente</h2>
        </div>
        <div class="seccion-contenido col-12 row no-margin-row">
            <a href="" class="elemento col-4">
                <div class="containerImagen" style="background-image: url(assets/images/logoProvisional.svg)"></div>
                <div class="containerElemento">
                    <p class="primary p-no-margin">Placeholder</p>
                </div>
            </a>
            <a href="" class="elemento col-4">
                <div class="containerImagen" style="background-image: url(assets/images/logoProvisional.svg)"></div>
                <div class="containerElemento">
                    <p class="primary p-no-margin">Placeholder</p>
                </div>
            </a>
            <a href="" class="elemento col-4">
                <div class="containerImagen" style="background-image: url(assets/images/logoProvisional.svg)"></div>
                <div class="containerElemento">
                    <p class="primary p-no-margin">Placeholder</p>
                </div>
            </a>
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
</html>