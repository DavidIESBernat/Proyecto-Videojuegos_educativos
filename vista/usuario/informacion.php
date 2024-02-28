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
        if (isset($_GET['error'])) {
    ?>
        <div class="alert alert-danger" role="alert">
            <?php
                $error_code = $_GET['error'];
                if ($error_code == 1) {
                    echo "La contraseña actual es incorrecta.";
                } else if ($error_code == 2) {
                    echo "Las contraseñas no coinciden.";
                }
            ?>
        </div>
    <?php
        }

        foreach($usuarios as $usuario) {
            if ($usuario->getId_usuario() == $id_usuario) {
    ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center cuerpo">
                <div class="col-sm-12 col-md-4 col-lg-4 columnas">
                    <ul>
                        <a href="?controlador=usuario"><li class="active">Mi cuenta</li></a>
                        <a href="?controlador=usuario&accion=bibliotecaJuegos"><li>Biblioteca</li></a>
                        <a href="?controlador=usuario&accion=modificarDatos"><li>Modificar datos</li></a>
                        <a href="?controlador=usuario&accion=paginaModificarContraseña"><li>Modificar Contraseña</li></a>
                        <a href="controlador/cerrarSesion.php"><li>Cerrar sesión</li></a>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 columnas principal">
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
        }
    ?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
