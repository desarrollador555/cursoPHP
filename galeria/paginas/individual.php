<?php 
    require_once('../conexion/conexion.php');
        $id= isset($_GET['id'])?(int)$_GET['id']:false;
        if(!$id){
            header('Location:../index.php');
        }
        $statement=$conexion->prepare('SELECT * FROM imagenes where id = :id1');
        $statement->execute(
            array(':id1'=>$id)
        );
        $resultado=$statement->fetch();
        
        
    require_once('../views/individual.view.php');
?>