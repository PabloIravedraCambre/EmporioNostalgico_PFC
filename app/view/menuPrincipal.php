<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú Principal - Emporio Nostálgico</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/estilosPrincipal.css">
  <script src="../view/js/funcionesEmporio.js"></script>
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

 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
  header("Location: actualizarUsuario.php"); //Integrar función de actualizar los datos del usuario
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
      <li><a href="paginaFavoritos.php"><img src="./imagenesTiendaNostalgica/favoritos.png" alt="favoritos" class="iconos">Favoritos</a></li>
      <li><a href="iniciarSesion.php"><img src="./imagenesTiendaNostalgica/iniciarSesion.png" alt="loginUsuario" class="iconos">Iniciar Sesión</a></li>
  </ul>
</div>
  </div>
</header>
<main>
<div class="card mb-3">
  <img src="../view/imagenesTiendaNostalgica/imagenPresentación.png" class="card-img-top" alt="...">
</div>
<div class="row row-cols-1 row-cols-md-5 justify-content-center">
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/producto1.jpg" class="card-img-top" alt="..." id="zoom">
      <div class="card-body">
        <h5 class="card-title">Mansión de Casper</h5>
        <p class="card-text fst-italic">Está muy bien (texto en desarrollo)</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-info" type="button" id="botonCasper">Ver Producto</button>
          <div id="infoCasper">
            <p class="descripciones">Esta mansión hará las delicias de los más pequeños de la casa.
              Cuenta con un diseño intrincado, repleto de secretos y pasadizos ocultos
              <form action="../controller/favoritoUsuarioController.php" method="POST">
                    <input type="hidden" name="productoId" value="1">
                    <button type="submit">
                      <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                    </button>
              </form>
            </p>
          </div>
          <h4><span class="badge bg-secondary mt-3">Precio: 20€</span></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/gárgola.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Muñeco Gárgolas</h5>
        <p class="card-text fst-italic">De la serie animada de las gárgolas</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-info" type="button" id="botonGargola">Ver Producto</button>
          <div id="infoGargola">
            <p class="descripciones">Estas gárgolas son muy poderosas y todo un clásico de 
              la animación de los 90
              <form action="../controller/favoritoUsuarioController.php" method="POST">
                    <input type="hidden" name="productoId" value="2">
                    <button type="submit">
                      <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                    </button>
              </form>
            </p>
          </div>
          <h4><span class="badge bg-secondary mt-3">Precio: 12€</span></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/misterMusculo.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mister Músculo</h5>
        <p class="card-text fst-italic">¡Se estira hasta dónde quieras, y no poco!</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-info" type="button" id="botonMusculo">Ver Producto</button>
          <div id="infoMusculo">
            <p class="descripciones">De pequeño conseguí estirarlo hasta el fondo del pasillo,
              por lo que el producto da lo que promete.
              <form action="../controller/favoritoUsuarioController.php" method="POST">
                    <input type="hidden" name="productoId" value="3">
                    <button type="submit">
                      <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                    </button>
              </form>
            </p>
          </div>
          <h4><span class="badge bg-secondary mt-3">Precio: 7€</span></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/metalgreymon.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Metalgreymon (Digimon)</h5>
        <p class="card-text fst-italic">Un T-Rex que lanza cohetes</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-info" type="button" id="botonGreymon">Ver Producto</button>
          <div id="infoGreymon">
            <p class="descripciones">Los cohetes que lanza se venden por separado, sorry, 
              yo no pongo las normas...
              <form action="../controller/favoritoUsuarioController.php" method="POST">
                    <input type="hidden" name="productoId" value="4">
                    <button type="submit">
                      <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                    </button>
              </form>
            </p>
          </div>
          <h4><span class="badge bg-secondary mt-3">Precio: 18,5€</span></h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Segunda fila -->

<div class="row row-cols-1 row-cols-md-5 g-4 mt-4 mb-4 justify-content-center">
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/Hércules.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Muñeco de Hércules</h5>
        <p class="card-text fst-italic">El oficial de la serie</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-info" type="button">Ver Producto</button>
          <h4><span class="badge bg-secondary mt-3">Precio: 6€</span></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/streetshark.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Orca Streetshark</h5>
        <p class="card-text fst-italic">Una orca con pantalones</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-info" type="button">Ver Producto</button>
          <h4><span class="badge bg-secondary mt-3">Precio: 8,30€</span></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/gijoe.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ninja Gi-Joe</h5>
        <p class="card-text fst-italic">Un ninja articulado</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-info" type="button">Ver Producto</button>
          <h4><span class="badge bg-secondary mt-3">Precio: 4€</span></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagenesTiendaNostalgica/buzz.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Buzz Lightyear</h5>
        <p class="card-text fst-italic">¡Hasta tu cartera y más allá!</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-info" type="button">Ver Producto</button>
          <h4><span class="badge bg-secondary mt-3">Precio: 23€</span></h4>
        </div>
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
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="./página2.php">2</a></li>
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
