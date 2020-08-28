<?php
    require_once('../config/config.php');
    require_once('../config/functions.php');
    $conexion=conexion($db_config);
    if($conexion==false){
        header('Location:error.php');
    }
    session_start();
    // if($_SERVER['REQUEST_METHOD']=='GET' && !empty($_GET['search'])){
        $search=limpiarCampos($_GET['search']);
        if(!$search){
            header('Location:../index.php');
        }

        $results=buscar($conexion,$search,$blog_config['post_pagina']);
        
        $pagina=paginaActual();

         $totalPaginas = paginacion($conexion,$blog_config['post_pagina']);
        
        if(!$results){
            $titulo= "No hay busquedas con: $search";
        }else{
            $titulo= "Resultados de la busqueda: $search";
        }
    // }else{
        // header('Location:../index.php');
    // }

    require_once('../paginas/header.php');
    require_once('../views/buscar.view.php');
    require_once('../paginas/paginacion.php');
    require_once('../paginas/footer.php');

?>