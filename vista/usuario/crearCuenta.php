<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="assets/css/header.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/css/formularios.css" rel="stylesheet" type="text/css" media="screen">
    <title>Registro</title>
</head>
<body class="cuerpo">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 columna">
                    <h1>Crear cuenta</h1>
                    <form>
                        <label>Correo</label>
                        <input type="email" name="correo" placeholder="ejemplo@correo.com">

                        <label>Contraseña</label>
                        <input type="password" name="contraseña" placeholder="Contraseña1234">

                        <label>Confirmar contraseña</label>
                        <input type="password" name="contraseña" placeholder="Contraseña1234">

                        <label>Nombre</label>
                        <input type="password" name="contraseña" placeholder="Juan">

                        <label>Apellido</label>
                        <input type="password" name="contraseña" placeholder="García">
                        
                        <label>Edad</label>
                        <input type="password" name="contraseña" placeholder="18">

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
