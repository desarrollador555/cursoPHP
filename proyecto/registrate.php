<?php 
require_once('conexion/conexion.php');
    $error='';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $usuario=limpiar($_POST['usuario']);
        $contraseña=hash('sha512', limpiar($_POST['contraseña']));
        
        $contraseña2=hash('sha512', limpiar($_POST['contraseña2']));
        
        if(empty($usuario) or empty($contraseña)){
            $error.= 'Rellena los campos correctamente';
        }else{
            if($contraseña!=$contraseña2){
                $error.='Las contraseñas son distintas';
            }else{
                //verificamos si existe un usuario en la base de datos
                $statement=$conexion->prepare('SELECT * FROM usuario where nombre=:nombreUser LIMIT 1');
                $statement->execute(
                    array(
                        ':nombreUser'=>$usuario
                    )
                );
                $resultado=$statement->fetchAll();
                if(!empty($resultado)){
                    $error.='El usuario ya esta registrado';
                }else{
                    if($error==''){
                        $statement=$conexion->prepare('INSERT INTO usuario values(null, :nombreusuario, :contra)');

                        $statement->execute(
                            array(':nombreusuario'=>$usuario,
                            ':contra'=>$contraseña)
                    );
                        header('Location:index.php');
                    
                   

                    }
                }
            }

        }
        
    }
    function limpiar($variable){
        $variable=filter_var($variable,FILTER_SANITIZE_STRING);
        return $variable;
    }
    require_once('views/registre.views.php');


?>