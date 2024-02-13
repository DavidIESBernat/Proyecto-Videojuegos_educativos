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
    <div class="container-fluid">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Filtrar</button>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Filtrar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <button id="btnFiltrar">Filtrar</button>
                <button id="btnMostrarTodos">Mostrar Todos</button>

                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de historia</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos Matematicos</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Historia</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Ciencia</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Idiomas</p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="row justify-content-center" id="div_videojuegos">

            </div>
        </div>
    </div>
    
    <script src="src/biblioteca.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>