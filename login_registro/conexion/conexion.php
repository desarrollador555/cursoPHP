<?php 
    try{
        $conexion=new PDO('mysql:host=localhost;dbname=escuela','root','');
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>