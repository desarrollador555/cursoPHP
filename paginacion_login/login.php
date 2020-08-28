<?php 
session_start();
    $error='';

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $usuario=$_POST['usuario'];
        $email=$_POST['contraseña'];

        // Verificarcion del texto
        if(empty($usuario)){
            $error.='ingrese un usuario <br>';
        }else{
            $usuario=verificar_texto($usuario);
        }
        // Verificarcion del correo
        if(empty($email)){
             $error.= 'ingrese un correo <br>';
        }else{
            $email=verificar_email($email);
            echo $email;
            if(!$email){
                $error.= 'ingrese un correo valido';
            }
        }

        if($error==''){
            if($usuario=='alejandra' && $email=='ale@gmail.com'){
                $_SESSION['usuario'] = $usuario;
                header('Location:panel.php');
            }else{
                $error.='Los datos no corresponden a ningun usuario registrado';
            }
        }
        
    }
    
    function verificar_texto($variable){
        $variable=filter_var($variable,FILTER_SANITIZE_STRING);
        return $variable;
    }
    function verificar_email($pass){
        $pass=filter_var($pass,FILTER_SANITIZE_EMAIL);
        $pass=filter_var($pass,FILTER_VALIDATE_EMAIL);
        return $pass;
    }
    
    require('view/login.view.php');
?>