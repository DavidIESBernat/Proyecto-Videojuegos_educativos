<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/biblioteca.css" rel="stylesheet" type="text/css" media="screen">
    <title>Biblioteca</title>
</head>
<body>
    <div class="mainContainer bg-white">
        <div class="section-title col-12">
            <h2 class="">Todos los juegos</h2>
        </div>
        <button class="botonFiltrar font600" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Filtrar por categoria</button>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Filtrar por categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

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
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Habilidades Cognitivas</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Habilidades Sociales</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Habilidades Artísticas</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Geografía</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Ciencias sociales</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Programación y Lógica</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Salud y Bienestar</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Ecología</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Literatura y Escritura</p>
                </div>
                <div class="opcion-filtro">
                    <input class="checkbox" type="checkbox">
                    <p>Juegos de Educación Financiera</p>
                </div>
                <button id="btnFiltrar" class="btnSimple boton">Filtrar</button>
                <button id="btnMostrarTodos" class="btnSimple boton"> Mostrar Todos</button>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="row justify-content-center" id="div_videojuegos">

            </div>
        </div>
    </div>
    
    <script src="assets/js/biblioteca.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>