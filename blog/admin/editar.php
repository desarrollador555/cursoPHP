<?php
session_start();
    include_once('../config/config.php');
    include_once('../config/functions.php');
    comprobarSesion();
    include_once('../paginas/header.php');
    $conexion=conexion($db_config);
    
    $error='';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=limpiarCampos($_POST['id']);
        $title=limpiarCampos($_POST['title']);
        $extracto=limpiarCampos($_POST['extracto']);
        $description=limpiarCampos($_POST['description']);
        
        $image_name=$_FILES['image']['name'];
        
        $imagedb=limpiarCampos($_POST['image-save']);


        if(empty($_FILES['image']['name'])){
            $image_name=$imagedb;
        }else{
            $image_origin=$_FILES['image']['tmp_name'];
            $image_destination='../imagenes/'.$_FILES['image']['name'];
            move_uploaded_file($image_origin,$image_destination);
        }

        $statement=$conexion->prepare('UPDATE publicaciones SET titulo = :tit, extracto = :extrac,texto = :tex,thumb = :thum WHERE id_publicaciones = :idd');
        
        $statement->execute(
                array(
                    ':idd'=>$id,
                    ':tit'=>$title,
                    ':extrac'=>$extracto,
                    ':tex'=>$description,
                    ':thum'=>$image_name
                )
                
            );
            header('Location:editar.php');

    }else{
        echo $id=obtener_id($_GET['id']);
        
        if(empty($id)){
            header('Location:index.php');
        }
        
        $publicacion=obtenerRegistro($conexion,$id);
        if(!$publicacion){
            header('Location:index.php');
        }
        
    }
    include_once('../views/editar.view.php');
    include_once('../paginas/footer.php');
?>