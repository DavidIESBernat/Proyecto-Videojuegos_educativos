<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/biblioteca.css">
    <title>Biblioteca</title>
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center">
                <?php
                    foreach ($videojuegos as $videojuego) {
                ?>
        
                <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="tarjeta-juego">
                        <img class="imagen-videojuego" src="<?= $videojuego->getImg() ?>">
                        <p class="nombre-videojuego"><?= $videojuego->getNombre() ?></p>
                        <p class="descripcion-videojuego"><?= $videojuego->getDescripcion() ?></p>
                        <a class="btn-videojuego" href="#">Jugar</a>
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