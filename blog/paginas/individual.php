<?php
session_start();
    require_once('../config/config.php');
    require_once('../config/functions.php');
    
    $conexion=conexion($db_config);
    if($conexion==false){
        header('Location:paginas/error.php');
    }else{
    
    require_once('../paginas/header.php');

        $id=obtener_id($_GET['id']);
        if(empty($id)){
            header('Location:../index.php');
        }else{

        
        $publicacion=obtenerRegistro($conexion,$id);
        if($publicacion==false){
            header('Location:error.php');
        }
        
    }
        
    require_once('../views/individual.view.php');
    // require_once('../paginas/paginacion.php');
    require_once('../paginas/footer.php');
}

?>