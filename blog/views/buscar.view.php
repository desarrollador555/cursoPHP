<section>
<h2 class='buscarTitulo'><?php echo $titulo ?></h2>
<?php if($results): ?>
              <?php foreach($results as $result): ?>
            <article>
                <div class="card mb-3 carta">
                    <img class='tamañoimagen' style="min-width:300px; max-width: 600px; padding-top:40px" src="<?php echo RUTA;?>imagenes/<?php echo $result['thumb'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title"><a href="<?php echo RUTA; ?>paginas/individual.php?id=<?php echo $result['id_publicaciones'] ?>"><?php echo $result['titulo'] ?></a></h2>
                        <p class="card-text"><?php echo $result['extracto'] ?></p>
                        <p><a class='subtitulo' href="<?php echo RUTA; ?>paginas/individual.php?id=<?php echo $result['id_publicaciones'] ?>">Continuar leyendo</a></p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
<?php else: include_once('error.php'); ?>

<?php endif; ?>
        </section>