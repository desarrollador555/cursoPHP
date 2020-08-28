
        <section>
            
            <article>
            <h2 class="card-title" style="display:block;width:300px;margin:20px auto"><?php echo $publicacion['titulo']; ?></h2>
                <div class="card mb-3 carta">
                
                    <img class='tamañoimagen' src="<?php echo RUTA;?>imagenes/<?php echo $publicacion['thumb'] ?>" class="card-img-top" alt="error asdasdsa">
                    <div class="card-body">
                        
                        <p class="card-text" style="text-align: justify;"><?php echo $publicacion['texto'] ?></p>
                        
                        <p class="card-text"><small class="text-muted">Fecha de publicacion <?php echo fecha( $publicacion['fecha'] )?></small></p>
                    </div>
                </div>
            </article>
            

            