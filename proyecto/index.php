<?php 
    session_start();
    require_once('conexion/conexion.php');

    $error='';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $usuario=limpiar($_POST['usuario']);
        $contraseña= hash('sha512',limpiar($_POST['contraseña']));
        
        if(empty($usuario) or empty($contraseña)){
            $error.= 'Rellena los campos correctamente';
        }else{
            $statement = $conexion->prepare('SELECT * FROM usuario where nombre=:nom and password = :pass');
            $statement->execute(
                array(':nom'=>$usuario, 'pass'=>$contraseña)
            );
            $nombreusuario=$statement->fetch();
            if(!$nombreusuario){
                $error.='Los datos proporcianados no corresponden a ningun usuario registrado';
            
            }else{
                $_SESSION['usuario']=$usuario;
                header('Location:paginas/contenido.php');
            }
        }
    }

    function limpiar($variable){
        $variable=filter_var($variable,FILTER_SANITIZE_STRING);
        return $variable;
    }
    require_once('views/login.views.php');
?>