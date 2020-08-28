
<div class="contenedor">
    <h1 class='titulo'>Login Session</h1>
    <form method="POST" action="<?php htmlspecialchars( $_SERVER['PHP_SELF'] )?>" class='formulario'>
        <input type="email" name="user" placeholder="Ingresa tu usuario" id="">
        <input type="password" name="password" placeholder="Ingresa tu password" id="">
        <input type="submit">
        <p href="">Do you don't an account!!</p>
        <a href="singin.php">Get in Now.</a>
        <?php if($error!=''): ?>
            <div class="error"><?php echo $error ?></div>
        <?php endif; ?>
    </form>
</div>
<br>
<br>
<br>
<br>
<br><br><br>