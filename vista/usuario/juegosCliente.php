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
    <?php
        foreach($usuarios as $usuario) {
    ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center cuerpo">
                <div class="col-sm-12 col-md-12 col-lg-4 columnas">
                    <ul>
                        <a href="?controlador=cliente"><li>Mi cuenta</li></a>
                        <a href="?controlador=cliente&accion=bibliotecaJuegos"><li class="active">Biblioteca</li></a>
                        <a href="?controlador=cliente&accion=modificarDatos"><li>Mis datos</li></a>
                        <a href="#"><li>Cerrar sesión</li></a>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8 columnas principal">
                    <h1>Información del usuario</h1>
                    <p>Nombre de usuario: <?= $usuario->getNombre() ?></p>
                    <p>Apellido: <?= $usuario->getApellido() ?></p>
                    <p>Correo electrónico: <?= $usuario->getCorreo() ?></p>
                    <p>Fecha de nacimiento: <?= $usuario->getFecha_nacimiento() ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
