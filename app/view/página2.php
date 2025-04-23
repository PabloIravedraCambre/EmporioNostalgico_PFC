<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú Principal - Emporio Nostálgico</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/estilosPrincipal.css">
</head>
<body>

<header>
<?php

session_start();
if (isset($_SESSION['nombre'])) {
  echo "<li>Bienvenid@, " . $_SESSION['nombre'] . "</li>";
  ?>
  <form action="" method="POST" id="posicionLogout">
      <input type="submit" name="logout" value="Cerrar sesión">
  </form>
  <form action="" method="POST" id="posicionUpdate">
      <input type="submit" name="update" value="Actualizar">
  </form>
  <?php
}


 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header("Refresh:0");
  exit();
}

?>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Sobre el Emporio Nostálgico</h4>
          <p class="text-muted">¿Te gustaría regresar a esa época increíble en la que todo era novedoso y genial? 
            En la tienda del Emporio Nostálgico encontrarás (o revisitarás) los productos que marcaron tu infancia
            y adolescencia. Desde videojuegos o juguetes a películas noventeras, seguro que encuentras algo que te encante.
            ¡Pásalo muy bien por aquí! 
          </p>
          <figcaption class="blockquote-footer">
            Pablo Iravedra Cambre
          </figcaption>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contacto</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Sígueme en Github</a></li>
            <li><a href="#" class="text-white">Escríbeme por correo</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
         <img src="./imagenesTiendaNostalgica/logoEmporio2.png" alt="logoEmporio">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Alternar navegación">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div id="contenedorList">
  <ul>
      <li><a href="#"><img src="./imagenesTiendaNostalgica/carrito.png" alt="carrito" class="iconos">Carro</a></li>
      <li><a href="#"><img src="./imagenesTiendaNostalgica/favoritos.png" alt="favoritos" class="iconos">Favoritos</a></li>
      <li><a href="iniciarSesion.php"><img src="./imagenesTiendaNostalgica/iniciarSesion.png" alt="loginUsuario" class="iconos">Iniciar Sesión</a></li>
  </ul>
</div>
  </div>
</header>
<main>
<div class="card mb-3">
  <img src="../view/imagenesTiendaNostalgica/imagenPresentación.png" class="card-img-top" alt="...">
</div>
<div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/producto1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mansión de Casper</h5>
        <p class="card-text">Está muy bien (texto en desarrollo)</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/gárgola.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Muñeco serie Gárgolas</h5>
        <p class="card-text">es una gárgola</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/misterMusculo.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mister Músculo</h5>
        <p class="card-text">¡Se estira!</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/metalgreymon.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Metalgreymon (Digimon)</h5>
        <p class="card-text">me encantaba de pequeño</p>
      </div>
    </div>
  </div>
</div>
<!-- Segunda fila -->

<div class="row row-cols-1 row-cols-md-4 g-4 mt-4 mb-4">
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/Hércules.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Muñeco de Hércules</h5>
        <p class="card-text">El oficial de la serie</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/streetshark.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Muñeco serie Gárgolas</h5>
        <p class="card-text">es una gárgola</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/misterMusculo.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mister Músculo</h5>
        <p class="card-text">¡Se estira!</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/metalgreymon.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Metalgreymon (Digimon)</h5>
        <p class="card-text">me encantaba de pequeño</p>
      </div>
    </div>
  </div>
</div>

<!-- Paginación Bootstrap -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="./menuPrincipal.php">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Siguiente</a>
    </li>
  </ul>
</nav>
</main>
<!-- Bootstrap Bundle con JS incluido -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
