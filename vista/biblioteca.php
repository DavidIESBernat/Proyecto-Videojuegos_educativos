<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="assets/css/header.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/css/biblioteca.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/css/global.css" rel="stylesheet" type="text/css" media="screen">
    <title>Biblioteca</title>
</head>
<body class="cuerpo">
    <a href="" class="elemento">
        <div class="containerImagen" style="background-image: url(assets/images/logoProvisional.svg)"></div>
        <div class="containerElemento">
            <p class="primary p-no-margin">Placeholder</p>
        </div>
    </a>

    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center">
                <?php
                    foreach ($videojuegos as $videojuego) {
                ?>
        
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="tarjeta">
                        <img src="<?= $videojuego->getImg() ?>" alt="Imagen del juego">
                        <h2><?= $videojuego->getNombre() ?></h2>
                        <p><?= $videojuego->getDescripcion() ?></p>
                        <button class="boton-jugar">Jugar</button>
                    </div>
                </div>
        
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>