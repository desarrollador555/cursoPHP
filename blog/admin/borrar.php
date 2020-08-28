<?php 
    include_once('../config/config.php');
    include_once('../config/functions.php');
    session_start();
    comprobarSesion();
    $conexion=conexion($db_config);
    $id=limpiarCampos($_GET['id']);
    
    if(!$id){
        header('Location:'.RUTA.'admin');
    }
    $statement=$conexion->prepare('DELETE FROM publicaciones WHERE id_publicaciones=:idp');
    $statement->execute(
        array(':idp'=>$id)
    );
    header('Location:'.RUTA.'admin/');
    

?>