<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Login</title>
</head>
<body>
    <div class="cajaLogin">
    <h1 class='titulo'>Inicia sesion</h1>

        <form class='formulario' action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <input type="text" name="usuario" id="" placeholder="Ingresa un usuario" >
            <input type="password" name="contraseña" id="" placeholder="Ingresa tu contraseña">
            <div class="botones">
                <input type="submit" class='boton'>
                <input type="reset" class='boton'>
            </div>
            <?php if($error!=''): ?>
            <div class="error">
                <p><?php echo $error; ?></p>
            </div>
            <?php endif; ?>
        </form>
        <div class="formulario2 ">
            <h3>No tienes una cuenta!!!</h3>
            <p><a href="registrate.php">Registrate ya</a></p>
        </div>
        
    </div>
</body>
</html>