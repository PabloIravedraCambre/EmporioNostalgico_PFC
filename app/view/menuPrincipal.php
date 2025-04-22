<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú Principal - Emporio Nostálgico</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
  <!-- Bootstrap CSS en modo LTR -->
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
  /**
   * Éste método maneja el cierre de sesión del usuario.
   *
   * Borra todos los datos de sesión, los elimina, y recarga la página.
   * 
   */
  session_unset();
  session_destroy();
  header("Refresh:0"); // Recarga la página
  exit();
}

 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
  /**
   * Éste método maneja la actualización de los datos del usuario.
   *
   * Redirige a la página de actualización de datos del usuario.
   * 
   */
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

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card border-secondary mb-2 shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/producto1.jpg" class="card-img-top" alt="producto1" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
          <h4 class="card-title">Mansión de Casper</h4>
              <p class="card-text">Una increíble </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="productoCasper.php"><button type="button" class="btn btn-sm btn-outline-secondary">Ver producto</button></a>
                </div>
                <div class="d-inline p-2 bg-primary text-white">29€</div>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card border-secondary mb-2 shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/gárgola.png" class="card-img-top" alt="gárgola" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
          <h4 class="card-title">Gárgolas: Muñeco 'Goliath'</h4>
              <p class="card-text">Muñeco de gárgola</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#"><button type="button" class="btn btn-sm btn-outline-secondary">Ver producto</button></a>
                </div>
                <div class="d-inline p-2 bg-primary text-white">12€</div>
              </div>
            </div>
          </div>

          <div class="col">
          <div class="card border-secondary mb-2 shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/misterMusculo.png" class="card-img-top" alt="misterMusculo" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
          <h4 class="card-title">Míster Músculo</h4>
              <p class="card-text">¡Se estira!</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#"><button type="button" class="btn btn-sm btn-outline-secondary">Ver producto</button></a>
                  
                </div>
                <div class="d-inline p-2 bg-primary text-white">20€</div>
              </div>
            </div>
          </div>
          

        <!-- Segunda fila -->

        <div class="col">
          <div class="card border-secondary mb-2 shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/metalgreymon.png" class="card-img-top" alt="metalgreymon" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
          <h4 class="card-title">Digimon: MetalGreymon</h4>
              <p class="card-text">¿Un tiranosaurio cibernético? ¡Aquí tienes uno! Los misiles se venden por separado.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#"><button type="button" class="btn btn-sm btn-outline-secondary">Ver producto</button></a>
                  
                </div>
                <div class="d-inline p-2 bg-primary text-white">15€</div>
              </div>
            </div>
          </div>

          <div class="col">
          <div class="card border-secondary mb-2 shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/streetshark.png" class="card-img-top" alt="streetshark" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
          <h4 class="card-title">StreetShark: Moby Lick</h4>
              <p class="card-text">¿Existe algo más peligroso que una orca? Sí, ¡Una con pantalones!</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#"><button type="button" class="btn btn-sm btn-outline-secondary">Ver producto</button></a>
                  
                </div>
                <div class="d-inline p-2 bg-primary text-white">8€</div>
              </div>
            </div>
          </div>

          <div class="col">
          <div class="card border-secondary mb-2 shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/Hércules.png" class="card-img-top" alt="Hércules" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
          <h4 class="card-title">Hércules: Muñeco de la serie</h4>
              <p class="card-text">Sigue igual de fuerte que el primer día, ¡Podría lanzar cualquier cosa!</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#"><button type="button" class="btn btn-sm btn-outline-secondary">Ver producto</button></a>
              
                </div>
                <div class="d-inline p-2 bg-primary text-white">16€</div>
              </div>
            </div>
          </div>
        
        <!-- Puedes duplicar este bloque para crear más tarjetas -->
        
        <div class="mt-5">
        <nav>
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">anterior</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="página2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">siguiente</a>
            </li>
          </ul>
        </nav>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Bootstrap Bundle con JS incluido -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
