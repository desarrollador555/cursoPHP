<?php 
$error='';

if(isset($_POST['submit'])){
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    if(!empty($nombre)){
        $nombre=validar_texto($nombre);
    }else{
        $error.= 'ingrese su nombre<br />';
    }

    if(!empty($correo)){
        // $correo=validar_correo($correo);
        $correo=validar_texto($correo);
            if(empty(validar_correo($correo))){
                $error.='ingresa un correo valido<br/ >';
            }
    }else{
        $error.= 'ingrese su correo <br />';
    }

    if(!$error){
        echo 'Tu nombre es: '.$nombre.'<br/>Tu correo es:'.$correo;
    }
    // echo 'Tu nombre es: '.$nombre.'<br />Tu correo es'.$correo;
}
function validar_texto($variable){
    // $variable=trim($variable);
    // $variable=htmlspecialchars($variable);
    // $variable=stripslashes($variable);
    $variable=filter_var($variable, FILTER_SANITIZE_STRING);
    return $variable;
}
function validar_correo($correo){
    $correo=filter_var($correo,FILTER_SANITIZE_EMAIL);
    $correo=filter_var($correo,FILTER_VALIDATE_EMAIL);
    return $correo;
}

require("index.view.php");


?>