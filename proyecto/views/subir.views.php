<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilossubir.css">
    <title>Subir Publicacion</title>
</head>
<body>
    <div class="caja">
        <h1 class='titulo'>Registrar nueva publicacion</h1>
        <form enctype='multipart/form-data' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class='formulario'>
            <div class="elemento">
            <label for="">Titulo</label>
            <input type="text" name="titulo" id="" placeholder="Ingresa el titulo" value="<?php echo (isset($titulo))?$titulo:'' ?>">
            </div>
            <div class="elemento">
                <label for="">Seleciona la imagen</label>
            <input type="file" name="imagen" id="">

            </div>
            <div class="elemento">
                <label for="">Descripcion</label>
                <textarea rows="" name="descripcion" cols=""><?php echo (isset($descripcion))?$descripcion:'' ?></textarea>
            </div>
            <div class="botones">
                <input class='boton e' type="submit">
                <a class='boton c' href="contenido.php">Cancelar</a>
            </div>
            <div class="error">
                <p><?php echo $error; ?></p>
            </div>
        </form>
    </div>
</body>
</html>