<?php 
    session_start();
    require_once('../config/config.php');
    require_once('../config/functions.php');
    comprobarSesion();
    require_once('../paginas/header.php');
    $error='';
    $conexion=conexion($db_config);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $title=limpiarCampos($_POST['title']);
        $extracto=limpiarCampos($_POST['extracto']);
        $description=limpiarCampos($_POST['description']);
        $image_origen=$_FILES['image']['tmp_name'];
        
        if(!empty($title) && !empty($extracto) && !empty($description) && !empty($_FILES['image']['name'])){
            guardarPublicacion($conexion,$title,$extracto,$description,$_FILES['image']['name']);

            $image_destination='../imagenes/'.$_FILES['image']['name'];
            move_uploaded_file($image_origen,$image_destination);
            header('Location:'.RUTA.'admin/');

    }else{
        $error.='<li>Completa todos los datos</li>';
    }
    }
    require_once('../views/new.view.php');
    require_once('../paginas/footer.php');

?>