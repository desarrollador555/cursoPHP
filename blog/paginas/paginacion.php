<?php 
    // include_once('config/config.php');
    // include_once('config/functions.php');
    if($conexion==false){
      header('Location:error.php');
    }

?>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <?php if(paginaActual()<=1): ?>
  <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <?php else: ?>
      <li class="page-item">
      <a class="page-link" href="?p=<?php if(!empty($_GET['search'])){ echo paginaActual()-1 .'&&search='.$_GET['search']; }else{ echo paginaActual()-1; }?>">Previous</a>
    </li>
    <?php endif; ?>

    <?php for($i=1;$i<=$totalPaginas;$i++): ?>
      <?php if($i==paginaActual()): ?>
      <li class="page-item"><a class="page-link "style="background-color: skyblue;" href="?p=<?php if(!empty($_GET['search'])){ echo $i.'&&search='.$_GET['search']; } ?>"><?php echo $i ?></a></li>
      
      <?php else: ?>
      <li class="page-item"><a class="page-link" href="?p=<?php if(!empty($_GET['search'])){ echo $i.'&&search='.$_GET['search']; } else {echo $i; } ?>"><?php echo $i ?></a></li>
      <?php endif; ?>
    <?php endfor; ?>

    <?php if(paginaActual()>=$totalPaginas): ?>
  <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
    </li>
    <?php else: ?>
      <li class="page-item">
      <a class="page-link" href="?p=<?php if(!empty($_GET['search'])){ echo paginaActual()+1 .'&&search='.$_GET['search']; } else {echo paginaActual()+1;} ?>">Next</a>
    </li>
    <?php endif; ?>
  
  </ul>
</nav>