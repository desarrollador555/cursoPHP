<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Cargar Imagen</title>
</head>
<body>
<header>
    <h1 class='titulo'>Subir imagen</h1>
</header>
    <div class="caja">
        <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" class='formulario'>
            <div class="elemento">
                <label for="">Titulo de la foto</label>
                <input name="titulo" type="text" placeholder="Agregar Titulo" value="<?php echo (isset($titulo))?$titulo:'' ?>">
            </div>
            <div class="elemento">
                <label for="">Agregar Imagen</label>
                <input name='foto' type="file" id="" accept=".jpg,.jpeg.png">
            </div>
            <div class="elemento">
                <label for="">Descripcion</label>
                <textarea name="descripcion" rows="10" cols="20"><?php echo isset($descripcion)?$descripcion:'' ?></textarea>
            </div>
            <div class="elemento">
                <input type="submit" class='boton'>
            </div>
            <?php if(!empty($error)): ?>
                <div class="error">
                    <?php echo $error; ?>
                </div>
            <?php endif;?>
            <?php if(!empty($enviado)): ?>
                <div class="enviado">
                    <?php echo $enviado; ?>
                </div>
            <?php endif;?>
        </form>
    </div>
    
</body>
</html>