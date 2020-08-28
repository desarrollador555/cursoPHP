<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="caja">

    <h1>Bienvenido <?php echo $_SESSION['usuario'] ?></h1>
    <ul>
        <li>Edad: 13 años</li>
        <li>Genero: Mujer</li>
        <li>Ocupacion: Estudiante</li>
        <li>Estado civil: Casada</li>
    </ul>
    <a href="cerrarSesion.php">Cerrar Sesion</a>
    </div>

</body>
</html>