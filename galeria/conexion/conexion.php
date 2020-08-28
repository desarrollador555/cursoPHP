<?php
    try{
        $conexion= new PDO('mysql:host=localhost;dbname=galeria','root','');
        
    }catch(PDOException $e){
        echo 'Error: '.$e->getMessage();
    }

?>