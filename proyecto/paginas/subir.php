<?php 
    require_once('../conexion/conexion.php');

$error='';
    session_start();
    if(!$_SESSION){
        header('../index.php');
    }
    if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_FILES)){
        $titulo=limpiar($_POST['titulo']);
        $imagen=$_FILES['imagen'];
        $descripcion=limpiar($_POST['descripcion']);
        
        //verificar si la imagen es correcta
        if(empty($titulo) or empty($imagen) or empty($descripcion)){
            $error.='Completa todos los campos';
        }else{
            
            $img=@getimagesize($_FILES['imagen']['tmp_name']);
            
            if($img!==false){
                $destino='../imagenes/'.$_FILES['imagen']['name'];
                $origen=$_FILES['imagen']['tmp_name'];
                $nombreimagen=$_FILES['imagen']['name'];
                move_uploaded_file($origen,$destino);
            }else{
                $error.='Verifica que sea una imagen';
            }
        }
        if($error==''){
            $statement=$conexion->prepare(
                'INSERT INTO publicaciones(id, titulo, imagen, descripcion)
                                values(null,:nombre, :img, :descri)');
            $statement->execute(
                array(
                    ':nombre'=>$titulo,
                    ':img'=>$nombreimagen,
                    ':descri'=>$descripcion
                ));
                header('Location:contenido.php');
        }
        
    }

    function limpiar($variable){
        $variable=filter_var($variable,FILTER_SANITIZE_STRING);
        return $variable;
    }
    require_once('../views/subir.views.php');
?>