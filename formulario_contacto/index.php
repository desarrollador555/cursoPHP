<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $error='';
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
        $mensaje=$_POST['mensaje'];

        if(!empty($nombre)){
            $nombre=limpiarcampos($nombre);
        }else{
             $error.='Ingrese su nombre<br />';
        }
        
        if(!empty($email)){

            // $email=limpiarcampos($email);

            if(empty(verificarCorreo($email))){
                $error.='Ingrese un correo valido<br/>';
            }
        }else{
            $error.='Ingrese su correo<br/>';
        }

        
        if(!empty($mensaje)){
            $mensaje=limpiarcampos($mensaje);
        }else{
             $error.='Ingrese un mensaje<br />';
        }

        if(!$error){
            // if(enviar_correo($nombre,$email,$mensaje)==true){
                $enviado='Mensaje Enviado';
            // }else{
            //     $error.='Fallo al enviar correo';
            // }
        }
    }

    function limpiarcampos($variable){
        $variable=filter_var($variable,FILTER_SANITIZE_STRING);
        return $variable;
    }
    function verificarCorreo($correo){
        $correo=filter_var($correo,FILTER_SANITIZE_EMAIL);
        $correo=filter_var($correo,FILTER_VALIDATE_EMAIL);
        return $correo;
    }

    function enviar_correo($nombre,$email,$mensaje){
        $enviar_a='correo@correo.com';
        $tema='Informacion de contacto, cotizaciones';
        $mensaje_preparado='Enviado por '.$nombre.'<br/>Dirrección de correo: '.$email.'<br />Mensaje: '.$mensaje;

        mail($enviar_a,$tema,$mensaje_preparado);
        return true;
    }

    include('vista/index.view.php');

?>