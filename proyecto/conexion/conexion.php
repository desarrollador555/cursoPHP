<?php 
    try{
        $conexion = new PDO('mysql:localhost=host;dbname=proyecto','root','');
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>