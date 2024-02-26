<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/cliente.css" rel="stylesheet" type="text/css" media="screen">
    <title>Informacion Usuario - Aprende Jugando</title>
</head>
<body>
    <?php
        foreach($usuarios as $usuario) {
            if ($usuario->getId_usuario() == $id_usuario) {
    ?>
    <div class="container-fluid mainContainer">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center cuerpo">
                <div class="col-12 col-lg-4 columnas">
                    <ul>
                        <a href="?controlador=usuario"><li class="active">Mi cuenta</li></a>
                        <a href="?controlador=usuario&accion=bibliotecaJuegos"><li>Biblioteca</li></a>
                        <a href="?controlador=usuario&accion=modificarDatos"><li>Modificar datos</li></a>
                        <a href="?controlador=usuario&accion=paginaModificarContraseña"><li>Modificar Contraseña</li></a>
                        <a href="?controlador=usuario&accion=logout"><li>Cerrar sesión</li></a>
                    </ul>
                </div>
                <div class="col-12 col-lg-8 columnas principal row">
                    <h1 class="col-10">Información del usuario</h1>
                    <p class="col-10">Nombre de usuario: <?= $usuario->getNombre() ?></p>
                    <p class="col-10">Apellido: <?= $usuario->getApellido() ?></p>
                    <p class="col-10">Correo electrónico: <?= $usuario->getCorreo() ?></p>
                    <p class="col-10">Fecha de nacimiento: <?= $usuario->getFecha_nacimiento() ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
            }
        }
    ?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
