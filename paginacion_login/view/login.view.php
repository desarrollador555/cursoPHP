<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesion</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="cajaformulario">

        <form class='formulario' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST'>
            <h2>Inicia Sesion</h2>
            <input type="text" placeholder="Ingresa su usuario" name="usuario" value="<?php echo (!empty($usuario))?$usuario :''?>">
            <input type="text" placeholder="Ingresa su correo" name="contraseña" value="<?php echo (!empty($email))?$email:''?>">
            <input type="submit" class='boton'>
        </form>
        
        <?php if($error): ?>

        <div class="error">
            <ul>
                <?php echo $error; ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>