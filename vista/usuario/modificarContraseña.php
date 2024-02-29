<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/cliente.css" rel="stylesheet" type="text/css" media="screen">
    <title>Modificar Contraseña - Aprende Jugando</title>
</head>
<body>
    <?php
        if (isset($_GET['error'])) {
    ?>
        <div class="alert alert-danger textCenter" role="alert">
        <?php
            $error_code = $_GET['error'];
            if ($error_code == 1) {
                echo "La contraseña actual es incorrecta.";
            } else if ($error_code == 2) {
                echo "Las nuevas contraseñas no coinciden.";
            } else if ($error_code == 3) {
                echo "Rellena todos los campos.";
            }
        ?>
    </div>
    <?php
        }

        foreach($usuarios as $usuario) {
            if ($usuario->getId_usuario() == $id_usuario) {
    ?>
    <div class="container-fluid mainContainer height100">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center cuerpo">
                <div class="col-sm-12 col-md-4 col-lg-4 columnas">
                    <ul>
                        <a href="?controlador=usuario"><li>Mi cuenta</li></a>
                        <a href="?controlador=usuario&accion=bibliotecaJuegos"><li>Biblioteca</li></a>
                        <a href="?controlador=usuario&accion=modificarDatos"><li>Modificar datos</li></a>
                        <a href="?controlador=usuario&accion=paginaModificarContraseña"><li class="active">Modificar Contraseña</li></a>
                        <a href="?controlador=usuario&accion=logout"><li>Cerrar sesión</li></a>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 columnas principal">
                    <h1>Modificar contraseña</h1>
                    <form action="?controlador=usuario&accion=modificarContraseña" method="post" class="row">
                        <div class="col-12">
                            <label class="col-10">Contraseña actual</label>
                            <input class="campoInput col-10" type="password" name="contraseña_actual" placeholder="">
                        </div>
                        <div class="col-12">
                            <label class="col-10">Nueva Contraseña</label>
                            <input class="campoInput col-10" type="password" name="contraseña_nueva" placeholder="">
                        </div>
                        <div class="col-12">
                            <label class="col-10">Repetir Contraseña</label>
                            <input class="campoInput col-10" type="password" name="repetir_contraseña_nueva" placeholder="">
                        </div>
                        <?php
                        if(isset($_GET['error'])) {
                            if($_GET['error'] == "nueva") {
                                ?><p class="p-no-margin error">Los campos de la nueva contraseña no coinciden</p>
                            <?php } else if($_GET['error']) { ?>
                                <p class="p-no-margin error">La contraseña actual no es correcta</p>
                            <?php } 
                        }?>
                        <div class="col-12">
                            <input class="col-10 btnSimple boton" type="submit" value="Modificar contraseña">
                        </div>
                        
                    </form>
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