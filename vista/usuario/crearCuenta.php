<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/formularios.css" rel="stylesheet" type="text/css" media="screen">
    <title>Registro</title>
</head>
<body>
    <div class="container-fluid mainContainer">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 columna">
                    <form action="?controlador=usuario&accion=crearUsuario" method="post">
                        <h1 class="primary">Crear cuenta</h1>
                        <label>Correo</label>
                        <input type="email" name="correo" placeholder="ejemplo@correo.com">

                        <label>Contraseña</label>
                        <input type="password" name="contraseña" placeholder="Contraseña1234">

                        <label>Confirmar contraseña</label>
                        <input type="password" name="confirmar_contraseña" placeholder="Contraseña1234">

                        <label>Nombre</label>
                        <input type="text" name="nombre" placeholder="Juan">

                        <label>Apellido</label>
                        <input type="text" name="apellido" placeholder="García">
                        
                        <label>Fecha nacimiento</label>
                        <input type="date" name="fecha_nacimiento" placeholder="18">

                        <div class="boton-y-enlace">
                            <input type="submit" value="Crear cuenta">
                            <p>¿Ya tienes una cuenta? <a href="?controlador=usuario&accion=paginaIniciarSesion">Inicia sesión</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
