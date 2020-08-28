<?php
    require_once('config/config.php');
    require_once('config/functions.php');
    require_once('paginas/header.php');
    session_start();
    if(isset($_SESSION['admin'])){
        header('Location:'.RUTA.'admin/index.php');
    }
    $error='';
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $user=limpiarCampos( $_POST['user']);
            $password=limpiarCampos($_POST['password']);
            if(!empty($user) && !empty($password)){
                if($user==$blog_credenciales['user_blog'] && $password==$blog_credenciales['password_blog']){
                    $_SESSION['admin']=$blog_credenciales['user_blog'];

                    header('Location:'.RUTA.'admin/');
                }
            }else{
                $error.='Complete los datos';
            }
        }
    require_once('views/login.view.php');
    require_once('paginas/footer.php');

?>