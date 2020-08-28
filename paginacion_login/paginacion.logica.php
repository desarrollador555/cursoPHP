<?php 
    require_once('conexion/conexion.php');

    $pagina_actual= (isset($_GET['pagina'])) ?(int)$_GET['pagina']:1;

    $post_pagina=5;
    
    $inicio=$pagina_actual*$post_pagina-$post_pagina;

    $statement=$con->prepare("Select SQL_CALC_FOUND_ROWS * from usuarios LIMIT $inicio,$post_pagina");

    $statement->execute();
    $articulos=$statement->fetchAll();
    if(!$articulos){
        header('Location:panel.php');
    }
    
    $numero_registros=$con->query('SELECT FOUND_ROWS() AS total');
    $numero_registros=$numero_registros->fetch()['total'];
    // numero de paginas
    $numero_paginas=ceil($numero_registros/$post_pagina);
    // echo '<pre>';
    // print_r($resultados);
    // echo '<pre>';

?>