<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto de correo</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
    
    </header>
    <section>
        <article>
            <div class="caja">
                <h1>Formulario de contacto</h1>
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                    <input type="text" name="nombre" id="" placeholder="Nombre:" value="<?php echo isset($nombre)?$nombre:'' ?>">
                    <input type="text" name="email" id="" placeholder="Correo:" value="<?php echo isset($email)?$email:'' ?>">
                    <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Message:"><?php echo isset($mensaje)?$mensaje:'' ?></textarea>
                    <?php if(!empty($error)):?>
                        <div class="error">
                            <p><?php echo isset($error)?$error:'' ?></p>
                        </div>
                    <?php elseif(!empty($enviado)): ?>
                        <div class="enviado">
                            <p><?php echo isset($enviado)?$enviado:''?></p>
                        </div>
                    <?php endif; ?>
                    <input class="boton" type="submit" name="enviarcorreo">
                </form>
            </div>
        </article>
    </section>
    <aside>
        
    </aside>
    <footer>
        
    </footer>
</body>
</html>