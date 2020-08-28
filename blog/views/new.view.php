<div class="container">
    <h3 class='titulo'>New Publication</h3>

    <form class='formulario' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data" method="POST">
    
    <input type="hidden" name='id'>
    <input name='title' type="text" placeholder="Place the title" value="<?php echo (isset($title))? $title:'' ?>">
    <input type="text" name="extracto" id="" placeholder="Ingresar el extracto" value="<?php echo (isset($extracto))? $extracto:'' ?>">
    <textarea name="description" rows="3" cols="3" placeholder="Place the description"><?php echo (isset($description))?$description:'' ?></textarea>
    <input name="image" type="file" name="" accept=".jpg" id="">
    <input type="hidden" name="imagen-save" value="">
    <?php if($error!=''): ?>
    <div class="error">
        <?php echo $error ?>
    </div>    
    <?php endif; ?>
    <input type="submit">
     
</form>
</div>