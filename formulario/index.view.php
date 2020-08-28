<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <label for="Nombre">Nombre</label>
    <input type="text" name="nombre" id="Nombre" value="<?php echo isset($nombre)?$nombre:''?>">
    <label for="correo">correo</label>
    <input type="email" name="correo" id="correo" value="<?php echo isset($correo)? $correo : ''?>">
    <input type="submit" name="submit">
    <?php echo ($error)? '<br/>'.$error:''?>
    </form>
</body>
</html>