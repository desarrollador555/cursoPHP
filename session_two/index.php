<?php
    session_start();
    $error='';
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $usuario=$_POST['user'];
        $contraseña=$_POST['pass'];

        if($usuario=='Ale' && $contraseña==1234){
            $_SESSION['usuario']=$usuario;
            header('location:inicio.php');
        }
    }
    require('views/index.view.php');

?>