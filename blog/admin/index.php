<?php
//Index Administrador
    session_start();
    require_once('../config/config.php');
    require_once('../config/functions.php');
    require_once('../paginas/header.php');
    comprobarSesion();
    $conexion = conexion($db_config);
    if(!$conexion){
        header('Location:error.php');
    }
    $results=obtenerRegistros($conexion,$blog_config['post_pagina']);
    paginaActual();
    $totalPaginas=paginacion($conexion,$blog_config['post_pagina']);
    require_once('../views/admin_index.view.php');
    require_once('../paginas/paginacion.php');
    require_once('../paginas/footer.php');
?>