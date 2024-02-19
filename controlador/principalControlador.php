
<?php

// Declaracion del controlador principal
class principalControlador {

    // Funcion predeterminada del controlador
    public function index() {

        // Header
        include_once 'vista/header.php';

        // Main
        include_once 'vista/home.php';

        // Footer
        include_once 'vista/footer.php';
    }
}
?>