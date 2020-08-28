<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicia Sesion</title>
</head>
<body>
    
        <h1 class='titulo'>Inicia Sesion</h1>
        <hr class='linea posicion'>
    <div class="contenedor posicion">
            <div class="registro">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class='formulario' method="POST">
                    <input type="text" name="usuario" id="" placeholder="Ingrese un usuario">
                    <input type="password" name="contraseña" id="" placeholder="Ingrese una contraseña">
                    <input type="submit" class='boton'>
                </form>
                <div class="error">
                    <p><?php echo $error ?></p>
                </div>
            </div>
    </div>
    <div class="posicion form2">
        <p>No tienes una cuenta</p>
        <a href="registrate.php" class='enlace'>Registrate ya!!!</a>
    </div>
</body>
</html>