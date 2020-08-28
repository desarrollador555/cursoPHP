<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="form">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" >
            <div class="form-clas">
                <label for="">Nombre de usuario</label>
                <input type="text" name="nombre" id="">
            </div>
            <div class="form-clas">
                <label for="">Contraseña</label>
                <input type="password" name="contraseña" id="">
            </div>
            <div class="form-clas">
                <input type="submit" value="Enviar Formulario" id="">
            </div>
        </form>
    </div>
</body>
</html>