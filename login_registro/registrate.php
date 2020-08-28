<?php 
    $error='';
    
    include_once('conexion/conexion.php');

    if(isset($_SESSION['usuario'])){
        header('Location:contenido.php');
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $usuario= strtolower(comprobar_texto( $_POST['usuario']));
        $contraseña=$_POST['contraseña'];
        $contraseña2=$_POST['contraseña2'];

        if(empty($usuario) or empty($contraseña) or empty($contraseña2)){
            $error.='<li>Complete todos los campos</li>';
        }else{

            $statement=$conexion->prepare('SELECT * FROM alumnos WHERE usuario=:usuario LIMIT 1' );
            $statement->execute(
                array(':usuario'=>$usuario)
            );
            $resultados=$statement->fetch();
                if($resultados){
                    $error.='<li>Ingrese un usuario diferente</li>';
                }
                $contraseña=hash('sha512',$contraseña);
                $contraseña2=hash('sha512',$contraseña2);
                
                if($contraseña!=$contraseña2){
                    $error.='<li>Las contraseñas son distintas</li>';                    
                }

                if($error==''){

                    $statement = $conexion->prepare('INSERT INTO alumnos(id,usuario,contraseña) values(null,:user, :pass)');

                    $statement->execute(
                        array(':user'=>$usuario,':pass'=>$contraseña)
                    );
                    header('Location:login.php');
                }
        }
      
    }
    function comprobar_texto($variable){
        $variable=filter_var($variable,FILTER_SANITIZE_STRING);
        return $variable;
    }
    require_once('views/registro.view.php');

?>