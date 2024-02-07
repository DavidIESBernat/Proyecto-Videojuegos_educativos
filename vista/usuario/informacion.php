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
<body class="cuerpo mainContainer">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="row justify-content-center">
                <?php foreach($usuarios as $usuario) { ?>
                <div class="col-sm-12 col-md-12 col-lg-12 principal">
                    <div class="tab-content">
                        <ul class="tabs">
                            <li class="active-tab"><a>Mi cuenta</a></li>
                            <li><a>Mis juegos</a></li>
                            <li><a>Modificar datos</a></li>
                            <li><a>Cerrar sesión</a></li>
                        </ul>
                    
                        <div class="row info-container">
                            <h1>Información personal</h1>
                            <div class="col-sm-12 col-md-6 datos-principales">
                                <p>Nombre del cliente: <?= $usuario->getNombre() ?></p>
                                <p>Apellido del cliente: <?= $usuario->getApellido() ?></p>
                                <p>Correo del cliente: <?= $usuario->getCorreo() ?></p>
                                <p>Fecha de nacimiento: <?= $fecha_formateada = date("d/m/Y", strtotime($usuario->getFecha_nacimiento())); ?></p>
                            </div>
        
                            <div class="col-sm-12 col-md-6 datos-principales">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
