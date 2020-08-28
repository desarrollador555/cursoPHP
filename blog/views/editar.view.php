<div class="container">
    <h3 class='titulo'>Editar Publication</h3>
    <form class='formulario' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data" method="POST">

    <input type="hidden" name="id" value="<?php echo $publicacion['id_publicaciones'] ?>">

    <input name='title' type="text" value="<?php echo $publicacion['titulo'] ?>">

    <input type="text" name="extracto" id="" value="<?php echo $publicacion['extracto'] ?>">
    
    <textarea name="description" rows="3" cols="3"><?php echo $publicacion['texto'] ?></textarea>
    
    <input name="image" type="file" accept=".jpg" id="">

    <input type="hidden" name="image-save" value="<?php echo $publicacion['thumb'] ?>">
 
    <?php if($error!=''): ?>
    <div class="error">
        <?php echo $error ?>
    </div>    
    <?php endif; ?>
    <input type="submit" value="Guardar Cambios">
     
</form>
</div>