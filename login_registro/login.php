<?php
    session_start();
    require_once('conexion/conexion.php');
    $error='';
    if(isset($_SESSION['usuario'])){
        header('Location:contenido.php');
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $usuario=validar_texto($_POST['usuario']);
        $contraseña=hash('sha512',validar_texto($_POST['contraseña']));
        
        if(empty($usuario) or empty($contraseña)){
            $error.='Complete los campos correctamente';
        }else{
            

            $statement=$conexion->prepare('SELECT * FROM alumnos where usuario=:nombre and contraseña=:pass');
            $statement->execute(
                array(
                    ':nombre'=>$usuario,
                    ':pass'=>$contraseña
                )
            );
            $resultado=$statement->fetch();
            print_r($resultado);

            if(!$resultado){
                $error.='Los datos ingresados no son correctos';
            }else{
                $_SESSION['usuario']=$usuario;
                header('Location:contenido.php');
            }
        }

    }
    function validar_texto($variable){
        $variable=filter_var($variable,FILTER_SANITIZE_STRING);
        return $variable;
    }
    require_once('views/login.view.php');
?>