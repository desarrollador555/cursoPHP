<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <div class="caja">
        <h1 class='titulo'>Mi galeria</h1>
        <div class="imagenes">
            <?php foreach($resultados as $resultado): ?>
                <figure>
                    <a href="paginas/individual.php?id=<?php echo $resultado['id'] ?>&&pagina=<?php echo $pagina ?>"><img class='thum' src="subir/<?php echo $resultado['imagen'] ?>" alt=""></a>
                </figure>
            <?php endforeach; ?>
        </div>
        <div class="paginacion">
            <?php if($pagina<=1): ?>
                <a class='izquierda boton inactive'>< Atras</a>
            <?php else: ?>
                <a href="?pagina=<?php echo $pagina-1 ?>" class='izquierda boton'>< Atras</a>
            <?php endif; ?>

            <!-- <a href="" class='izquierda boton inactive'>< Atras</a> -->
            <?php if($pagina==$total_paginas): ?>
                <a class='derecha boton inactive'> Siguiente ></a>
            <?php else: ?>
                <a href="?pagina=<?php echo $pagina+1 ?>" class='derecha boton'>Siguiente ></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="piepagina">
        <p>Derechos reservados SA de CV</p>
    </div>
</body>
</html>