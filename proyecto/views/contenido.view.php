<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contenido.css">
    <title>Pagina de inicio</title>
</head>
<body>
    <div class="caja">
        <header>
                <h1 class='titulo'>Bienvenido <?php echo $_SESSION['usuario'] ?></h1>
        </header>
        <section class='subirArticulos'>
            <h2><a href="subir.php">Clic para subir nuevo contenido</a></h2>
            <a class='flotar_izquierda boton' href="cerrar.php">Cerrar Session</a>
        </section>
        <section class='contenido'>
            <h2>Ultimas publicaciones</h2>
            <div class='paginacion'>
                        <a href="">Avanzar</a>
                        <a href="">Retroceder</a>
            </div>
            <table class='tabla'>
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Imagen</th>
                        <th class='tamaño'>Descripcion</th>
                        <th colspan="">Botones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($resultados as $resultado): ?>
                    <tr>
                        <td><?php echo $resultado['titulo']; ?></td>
                        <td><img class='img-tamaño' src="../subir/<?php echo $resultado['imagen'] ?>" alt=""></td>
                        <td><?php echo $resultado['descripcion'] ?></td>
                        <td><p class='boton'>Editar</p> / <p class="botoneli">Eliminar</p></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>