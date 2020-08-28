<div class="container">
    <h3 class='titulo'>Control Panel</h3>
    <button class='botonN'><a href="<?php echo RUTA;?>admin/new.php">New Notice</a></button>
     <button class=boton><a href="close_session.php">Close Session</a></button>
   
   <table class='table1'>
       <thead>
           <tr>
               <th>Id</th>
               <th>Name</th>
               <th style="width: 300px;">Descripcion</th>
               <th>Imagen</th>
               <th class='tamaño'>Fecha</th>
               <th colspan="3">Botones</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach($results as  $result): ?>
           <tr>
               <td><?php echo $result['id_publicaciones'] ;?></td>
               <td><?php echo $result['titulo'] ?></td>
               <td><?php echo $result['extracto']?></td>
               <td><img class='imagen' src="<?php echo RUTA.'imagenes/'.$result['thumb']; ?>" alt=""></td>
               <td><?php echo fecha($result['fecha']) ?></td>
               <td class=''><a href="<?php echo RUTA; ?>admin/editar.php?id=<?php echo $result['id_publicaciones'] ?>" class='botonN'>Editar</a></td>
               <td><a class='botonN' href="../paginas/individual.php?id=<?php echo $result['id_publicaciones'] ?>">Ver</a></td>
               <td><a href="borrar.php?id=<?php echo $result['id_publicaciones'] ?>" class='boton'>Borrar</a></td>
           </tr>
           <?php endforeach; ?>
       </tbody>
   </table>
</div>