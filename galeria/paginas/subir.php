<?php
    session_start();
    if(!$_SESSION){
        header('Location:../index.php');
    }
    
    include_once('../conexion/conexion.php');
        $enviado='';
        $error='';
        if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_FILES)){
            $titulo=limpiarVariables($_POST['titulo']);
            $descripcion=limpiarVariables($_POST['descripcion']);
            $imagen=$_FILES['foto'];

            if(empty($titulo) or empty($imagen) or empty($descripcion)){
                $error.='<li>Completa los datos solicitados</li>';
            }else{
            //Al enviar imagenes usamos en lugar de post and get, el metodo $_FILES['foto'];
                $check=@getimagesize($_FILES['foto']['tmp_name']);
                    if($check!==false){
                        $carpeta_destino='../subir/';
                        $nombre_img=$_FILES['foto']['name'];
                        $archivo_subido=$carpeta_destino.$_FILES['foto']['name'];
                        move_uploaded_file($_FILES['foto']['tmp_name'],$archivo_subido);
                    }else{
                        $error.='Verifica que el archivo sea una imagen';
                    }
                    }
            if($error==''){
                $statement=$conexion->prepare(
                    'INSERT INTO imagenes(id, titulo, imagen, descripcion)
                                    values(null,:nombre, :img, :descri)');
                $statement->execute(
                    array(
                        ':nombre'=>$titulo,
                        ':img'=>$nombre_img,
                        ':descri'=>$descripcion
                    ));
                
                $enviado.='Subido Exitosamente';
                header('Location:subir.php');
            }
        }
        function limpiarVariables($variable){
            $variable=filter_var($variable,FILTER_SANITIZE_STRING);
            return $variable;
        }
        
    require_once('../views/subir.view.php');

?>