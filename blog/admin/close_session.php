<?php 
    session_start();
    session_destroy();
     if(!$_SESSION['user']){
         header('Location:../index.php');
     }

?>