<?php 
    if(!$_SESSION){
        header('Location:../index.php');
    }
    session_start();
    session_destroy();
    
?>