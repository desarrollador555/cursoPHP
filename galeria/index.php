<?php 
    include_once('conexion/conexion.php');
        $pagina= isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

        $imagenes_por_pagina=8;

        $inicio_selecion= ($pagina>1) ? $pagina*$imagenes_por_pagina-$imagenes_por_pagina: 0 ;

        $statement=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM imagenes limit $inicio_selecion,
        $imagenes_por_pagina");
        $statement->execute();
        
        $resultados=$statement->fetchAll();
        if(!$resultados){
            header('Location:index.php');
        }

        //boton de ir y regresar

        $statement=$conexion->query('SELECT FOUND_ROWS() AS total');
        $publicaciones=$statement->fetch()['total'];
        
        echo $total_paginas=ceil($publicaciones/$imagenes_por_pagina);


        // echo '<pre>';
        // print_r($resultados);
        // echo '</pre>';

        

    include_once('views/index.view.php');
?>