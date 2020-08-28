<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
    <title>Publicaciones</title>
  </head>
  <body>
      <header class=''>
            <nav class=" header navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand <?php active('index.php');?>" href="<?php echo RUTA; ?>index.php">Noticias</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <?php if(!isset($_SESSION['admin'])): ?>
                
            <li class="nav-item">
                <a class="nav-link <?php active('login.php');?>" href="<?php echo RUTA;?>login.php">Inicio de Sesión</a>
            </li>
            <?php else: ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Herramientas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item <?php active('index.php');?>" href="<?php echo RUTA; ?>admin/index.php">Control Panel</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo RUTA; ?>admin/close_session.php">Close Session</a>
                </div>
            </li>
            <?php endif;  ?>
            
            </ul>
            <form class="form-inline my-2 my-lg-0" method="GET" action="<?php echo RUTA; ?>paginas/buscar.php">
                <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark bg-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
      </header>