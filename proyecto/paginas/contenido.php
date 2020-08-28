<?php 
    require_once('../conexion/conexion.php');
    session_start();
    if(!$_SESSION){
        header('Location:../index.php');
    }
    $paginaActual=isset($_GET['pagina'])?(int)$_GET['pagina']:1;
    $publicaciones_pagina=4;
    
    $iniciobuscar=($paginaActual>1)?$paginaActual*$publicaciones_pagina-$publicaciones_pagina:0;

    $statement=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS  * from publicaciones limit $iniciobuscar,$publicaciones_pagina");
    $statement->execute();
    $resultados=$statement->fetchAll();
    if(!$resultados){
        header('contenido.php');
    }
    //numero de publicaciones
    $statement=$conexion->query('SELECT FOUND_ROWS() as total');
    echo $total=$statement->fetch()['total'];
//     echo '<pre>';
//     print_r($resultados);
//     echo '</pre>';
// die();

    require_once('../views/contenido.view.php');

?>