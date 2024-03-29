<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/formularios.css" rel="stylesheet" type="text/css" media="screen">
    <title>Iniciar Sesion - Aprende Jugando</title>
</head>
<body>
<?php
        if (isset($_GET['error'])) {
            $error_code = $_GET['error'];
            if ($error_code == 1) {
    ?>
    <div class="alert alert-success" role="alert">
        <?php
            echo "Cuenta creada correctamente.";
        ?>
    </div>
    <?php
            } else if ($error_code == 2) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php
            echo "Rellena todos los campos para iniciar sesión.";
        ?>
    </div>
    <?php
            } else if ($error_code == 3) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php
            echo "Error al iniciar sesión. Credenciales incorrectas.";
        ?>
    </div>
    <?php
            }
        }
    ?>

    <div class="container-fluid mainContainer height100">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center">
                <div class="col-12 columna ">
                    <form action="?controlador=usuario&accion=iniciarSesion" method="post">
                        <h1 class="primary">Iniciar sesión</h1>
                        <label>Correo</label>
                        <input class="campoInput" type="email" name="correo" placeholder="ejemplo@correo.com">

                        <label>Contraseña</label>
                        <input class="campoInput" type="password" name="contraseña" placeholder="Contraseña">

                        <div class="boton-y-enlace">
                            <input class="btnEnviar" type="submit" value="Iniciar sesión">
                            <p>¿No tienes una cuenta? <a href="?controlador=usuario&accion=paginaRegistro">Crear una cuenta</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
