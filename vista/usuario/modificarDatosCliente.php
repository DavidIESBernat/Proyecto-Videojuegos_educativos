<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="assets/css/cliente.css" rel="stylesheet" type="text/css" media="screen">
    <title>Registro</title>
</head>
<body>
    <?php
        foreach($usuarios as $usuario) {
            if ($usuario->getId_usuario() == $id_usuario) {
    ?>
    <div class="container-fluid mainContainer">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center cuerpo">
                <div class="col-sm-12 col-md-4 col-lg-4 columnas">
                    <ul>
                        <a href="?controlador=usuario"><li>Mi cuenta</li></a>
                        <a href="?controlador=usuario&accion=bibliotecaJuegos"><li>Biblioteca</li></a>
                        <a href="?controlador=usuario&accion=modificarDatos"><li class="active">Modificar datos</li></a>
                        <a href="?controlador=usuario&accion=logout"><li>Cerrar sesión</li></a>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 columnas principal">
                    <h1>Modificar mis datos</h1>
                    <form action="?controlador=usuario&accion=modificarDatosUsuario" method="post">
                        <label>Correo</label>
                        <input type="email" name="correo" value="<?= $usuario->getCorreo() ?>">

                        <label>Contraseña</label>
                        <input type="password" name="contraseña" value="<?= $usuario->getContraseña() ?>">

                        <label>Confirmar contraseña</label>
                        <input type="password" name="confirmar_contraseña" value="<?= $usuario->getContraseña() ?>">

                        <label>Nombre</label>
                        <input type="text" name="nombre" value="<?= $usuario->getNombre() ?>">

                        <label>Apellido</label>
                        <input type="text" name="apellido" value="<?= $usuario->getApellido() ?>">
                        
                        <label>Fecha nacimiento</label>
                        <input type="date" name="fecha_nacimiento" value="<?= $usuario->getFecha_nacimiento() ?>">

                        <input type="submit" value="Modificar datos">
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
