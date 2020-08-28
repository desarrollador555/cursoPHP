<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="caja">
        <h1 class='titulo'>Nombres</h1>
        <div class="temas">
            <ul>
                <?php foreach($resultados as $resultado): ?>
                <li><?php echo $resultado['id'].' '.$resultado['nombre'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="paginacion">
            <ul>
                <?php if($pagina==1): ?>
                    <li><a  class='boton disabled'><</a></li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina-1 ?>" class='boton'><</a></li>
                <?php endif; ?>

                
                <?php for($inicio=1;$inicio<=$numerodePaginas;$inicio++): ?>
                    <?php if($inicio==$pagina):?>
                        <li><a href="?pagina=<?php echo $inicio ?>" class='boton active'><?php echo $inicio ?></a></li>
                    <?php else: ?>
                        <li><a href="?pagina=<?php echo $inicio ?>" class='boton'><?php echo $inicio ?></a></li>
                    <?php endif; ?>
                <?php endfor;?>


                <?php if($pagina==$numerodePaginas):?>
                    <li><a class='boton disabled'>></a></li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina+1 ?>" class='boton'>></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</body>
</html>