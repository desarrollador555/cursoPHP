<?php
    $valor=12;
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=prueba','root','');
        
        //consulta para mostrar los datos
        $statement = $conexion->prepare('SELECT nombre FROM usuarios WHERE id = :id ');
        $statement->execute(
            array(':id'=>$valor)
        );
        
        $resultados=$statement->fetchAll();
        echo '<pre>';
        print_r($resultados);
        echo '<pre>';


    }catch(PDOException $e){
        echo 'Error: '.$e->getMessage();
    }
?>