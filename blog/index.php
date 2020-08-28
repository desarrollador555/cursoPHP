<?php 
    require_once('config/config.php');
    require_once('config/functions.php');
    session_start();
    $conexion=conexion($db_config);
    if($conexion==false){
        header('Location:paginas/error.php');
    }else{
         
         $resultados=obtenerRegistros($conexion,$blog_config['post_pagina']);
        $pagina= paginaActual();
    
        $totalPaginas = paginacion($conexion,$blog_config['post_pagina']);
        
         if(!$resultados){
             header('Location:index.php');
         }
         
    require_once('views/index.view.php');
    require_once('paginas/paginacion.php');
    require_once('paginas/footer.php');

}

?>