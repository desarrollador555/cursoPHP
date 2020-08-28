<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    
        <header>
            <div class="caja">
                <h1 class="titulo"><?php echo $resultado['titulo'] ?></h1>
            </div>
        </header>
        <div class="imagen">
            <img src="../subir/<?php echo $resultado['imagen'] ?>" alt="">
        </div>
        <div class="caja">
            <div class="descripcion">
                    <?php echo $resultado['descripcion'] ?>
            </div>
        </div>
        <div class="caja">
        <div class="paginacion">
                <a href="../index.php?pagina=<?php echo $_GET['pagina'] ?>" class='izquierda boton'>< Atras</a>
                
            </div>
        </div>
            
    
        
        <div class="piepagina">
            <p>Derechos reservados SA de CV</p>
        </div>
</body>
</html>