<?php
    
    if(file_exists('doc.txt')){
        echo 'El archivo si existe';
        echo '<br>El contenido es: '. file_get_contents('doc.txt');
    }


?>