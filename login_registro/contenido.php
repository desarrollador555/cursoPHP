<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location:login.php');
    }
    $usuario=$_SESSION['usuario'];
    require_once('views/contenido.view.php');
?>