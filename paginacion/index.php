<?php
    
    $pagina=isset($_GET['pagina'])?(int)$_GET['pagina'] : 1 ;
    

    $postporpagina=5;

    $inicio=($pagina>1)?($pagina*$postporpagina-$postporpagina):0;
   
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=prueba','root','');
        $statement=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM usuarios LIMIT  $inicio, $postporpagina");
        $statement->execute(
            
        );
        $resultados=$statement->fetchAll();

        if(!$resultados){
            header('Location:index.php');
        }
        
        //numero de paginacion
        $totalArticulos=$conexion->query('SELECT FOUND_ROWS() AS total');
        $totalArticulos=$totalArticulos->fetch()['total'];
        $totalArticulos;
        
        $numerodePaginas= ceil($totalArticulos/$postporpagina);
    }catch(PDOException $e){
        echo 'error: '.$e->getMessage();
    }

    require('views/index.view.php');

?>