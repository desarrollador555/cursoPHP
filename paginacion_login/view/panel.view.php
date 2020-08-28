<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="cajapanel">
        <h1>Bienvenido <?php echo strtoupper( $usuario) ?></h1>
        <a href="cerrar.php" class='cerrarSession'>Cerrar Session</a>
    </div>
    <div class="paginacion">
        <h3 class='titulo'>Articulos</h3>
            <ul>
                <?php foreach($articulos as $articulo): ?>
                <li><?php echo strtoupper($articulo['id'] .' - ' . $articulo['nombre'] )?></li>
                <?php endforeach; ?>
            </ul>
    </div>
    <div class="pagina">
                <ul>
                    <?php if($pagina_actual<=1): ?>
                        <li><a class='boton disabled'><</a></li>
                    <?php else: ?>
                        <li><a href="?pagina=<?php echo $pagina_actual-1 ?>" class='boton'><</a></li>
                    <?php endif; ?>

                    <?php for($i=1;$i<=$numero_paginas;$i++): ?>
                        <?php if($i==$pagina_actual): ?>
                        <li><a class='boton active' href="?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php else: ?>
                        <li><a class='boton' href="?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php endif; ?>
                    <?php endfor; ?>
                    
                    
                    <?php if($pagina_actual>=$numero_paginas): ?>
                        <li><a class='boton disabled'>></a></li>
                    <?php else: ?>
                        <li><a href="?pagina=<?php echo $pagina_actual+1?>" class='boton'>></a></li>
                    <?php endif; ?>
                </ul>
            </div>
</body>
</html>