<?php
    include_once '../config/parameters.php';

    session_start(); 
    session_destroy(); 
    header('Location:'.url.'?controlador=home');
?>
