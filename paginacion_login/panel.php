<?php

    session_start();

    if($_SESSION){
        $usuario=$_SESSION['usuario'];
        require_once('conexion/conexion.php');
        require_once('paginacion.logica.php');
        require_once('view/panel.view.php');
        
    }else{
        header('Location:login.php');
    }
    

?>