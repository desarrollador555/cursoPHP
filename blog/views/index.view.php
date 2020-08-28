      <?php require_once('paginas/header.php'); ?>
              
              <section>
              <?php foreach($resultados as $resultado): ?>
              <!-- <?php echo $resultado[''] ?> -->
            <article>
                <div class="card mb-3 carta">
                    <img class='tamañoimagen' src="<?php echo RUTA;?>imagenes/<?php echo $resultado['thumb'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title"><a href="<?php echo RUTA; ?>paginas/individual.php?id=<?php echo $resultado['id_publicaciones'] ?>"><?php echo $resultado['titulo'] ?></a></h2>
                        <p class="card-text"><?php echo $resultado['extracto'] ?></p>
                        <p><a class='subtitulo' href="<?php echo RUTA; ?>paginas/individual.php?id=<?php echo $resultado['id_publicaciones'] ?>">Continuar leyendo</a></p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </section>