<!DOCTYPE html PUBLIC>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico"/> <!-- Favicon -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/global.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/css/header.css" rel="stylesheet" type="text/css" media="screen">
    
</head>
<body>
    <!-- Navegador -->
    <nav class="navbar navbar-expand-lg fixed-top headerContainer">
        <div class="container-fluid navContainer">
            <div class="headerContainerIzquierdo">
                <div class="logoContainer">
                    <img class="logoImagen" src="assets/images/bombillaConFondo.svg" alt="Imagen del logotipo de Aprende jugando"></img>
                </div>
                <a class="navbar-brand tituloHeader" href="<?=url?>?controlador=principal">Aprende Jugando</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-final" id="navbarNavAltMarkup">
                <div class="navbar-nav marginNav">
                    <a class="nav-link botonHeader font600 botonInicio" aria-current="page" href="<?=url?>?controlador=principal">Inicio</a>
                    <a class="nav-link botonHeader font600 botonBiblioteca" href="<?=url?>?controlador=biblioteca">Juegos</a>
                    <?php
                        if (isset($_SESSION['Usuario'])) {
                    ?>
                    <a class="nav-link botonHeader ultimoBoton font600 botonUsuario"  href="<?=url?>?controlador=usuario">Mi cuenta</a>
                    <?php
                        } else {
                    ?>
                    <a class="nav-link botonHeader ultimoBoton font600 botonLogin"  href="<?=url?>?controlador=usuario&accion=paginaIniciarSesion">Iniciar Sesión</a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </nav>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>