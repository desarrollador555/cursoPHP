<?php 
    require_once('config.php');

    function limpiarCampos($variable){
        $variable=filter_var($variable,FILTER_SANITIZE_STRING);
        return $variable;
    }
    function conexion($db_config){
        try{
            $conexion = new PDO('mysql:host=localhost;dbname='.$db_config['database'],$db_config['user'],$db_config['password']);
            return $conexion;
            
        }catch(PDOException $e){
            return false;
        }
    }
    function paginaActual(){
        return isset($_GET['p'])? (int)$_GET['p']:1;
    }
    function obtenerRegistros($conexion,$postPorPagina){
        $inicio=(paginaActual())>1?paginaActual()*$postPorPagina-$postPorPagina:0;
        
        $registros=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * from publicaciones LIMIT $inicio , $postPorPagina");
        
        $registros->execute();
        return $registros=$registros->fetchAll();
    }

    function obtener_id($id){
        $id = (int)limpiarCampos($id);
        
        return $id;
    }
    function obtenerRegistro($conexion,$id){
        
        $publicaciones = $conexion->prepare('SELECT * FROM publicaciones where id_publicaciones = :id_p LIMIT 1');
        
        $publicaciones->execute(array('id_p'=>$id));
        $publicaciones=$publicaciones->fetch();
        return ($publicaciones)?$publicaciones:false;  
    }
    function paginacion($conexion,$postPorPagina){
        $total=$conexion->query('SELECT FOUND_ROWS() as total');
        $valor=$total->fetch()['total'];
        return $numero= ceil($valor/$postPorPagina);
    }
    function fecha($fecha){
        
        $timestamp= strtotime($fecha);
        $meses= ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

        $dia=date('d',$timestamp);
        $mes=date('m',$timestamp)-1;
        $year=date('Y',$timestamp);
        $fecha= "$dia de ".$meses[$mes]." del $year";
         return $fecha;
    }

    // $statement=$conexion->query('SELECT FOUND_ROWS() AS total');
    //     $publicaciones=$statement->fetch()['total'];
        
    //     echo $total_paginas=ceil($publicaciones/$imagenes_por_pagina);

    function buscar($conexion,$search,$postPorPagina){
        $inicio=(paginaActual()<=1)?0:$postPorPagina*paginaActual()-$postPorPagina;
        $statement=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM publicaciones where titulo like :busqueda or texto like :busqueda LIMIT $inicio, $postPorPagina");
        $statement->execute(
            array(':busqueda'=>"%$search%")
        );
        $results=$statement->fetchAll();

        if($results){
            return $results;
        }else{
            return false;
        }
    }
    function active($currect_page){
        $url_array = explode('/', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        if($currect_page == $url){
        echo 'active';
        }
        }
        function comprobarSesion(){
            if(!isset($_SESSION['admin'])){
                header('Location:'.RUTA.'/index.php');
            }
        }
        function guardarPublicacion($conexion,$title,$extracto,$description,$image){
            $statement=$conexion->prepare("INSERT INTO publicaciones values(null,:titl,:extract,null,:descriptio,:imag)");
            $statement->execute(
                array(
                    ':titl'=>$title,
                    ':extract'=>$extracto,
                    ':descriptio'=>$description,
                    ':imag'=>$image
                )
            );
        }
?>