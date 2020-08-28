<?php
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
         $nombre=$_POST['nombre'];
         $contraseña=$_POST['contraseña'];
         validarEmail($nombre,$contraseña);
    }
    function validarEmail($nombre,$contra){
        $usuariosR=[
            [
                'usuario'=>'usuario',
                'contraseña'=>'1234'
            ],
            [
                'usuario'=>'usuaria',
                'contraseña'=>'12345'
            ]
        ];
        foreach($usuariosR as $user){
            // echo $user['usuario'].$user['contraseña'];
            if($nombre==$user['usuario'] && $contra==$user['contraseña']){
                 'Credenciales Aceptadas : '.$nombre.' '.$contra;

            }
        }
        // print_r($usuariosR);
    }
    include_once('index.view.php');
?>