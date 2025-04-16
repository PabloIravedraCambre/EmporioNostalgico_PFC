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
      <li><a href="#"><img src="./imagenesTiendaNostalgica/iniciarSesion.png" alt="loginUsuario" class="iconos">Iniciar Sesión</a></li>
  </ul>
</div>
  </div>
</header>

<main>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/producto1.jpg" class="card-img-top" alt="producto1" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="productoCasper.php"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Guardar en favoritos</button>
                </div>
                <small class="text-muted">30€</small>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/producto1.jpg" class="card-img-top" alt="producto1" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="productoCasper.php"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Guardar en favoritos</button>
                </div>
                <small class="text-muted">30€</small>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/producto1.jpg" class="card-img-top" alt="producto1" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="productoCasper.php"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Guardar en favoritos</button>
                </div>
                <small class="text-muted">30€</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Segunda fila -->

        <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/producto1.jpg" class="card-img-top" alt="producto1" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="productoCasper.php"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Guardar en favoritos</button>
                </div>
                <small class="text-muted">30€</small>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/producto1.jpg" class="card-img-top" alt="producto1" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="productoCasper.php"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Guardar en favoritos</button>
                </div>
                <small class="text-muted">30€</small>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card shadow-sm">
            <img src="../view/imagenesTiendaNostalgica/producto1.jpg" class="card-img-top" alt="producto1" width="100%" height="225" style="object-fit: cover;">
          </div>
          <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="productoCasper.php"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Guardar en favoritos</button>
                </div>
                <small class="text-muted">30€</small>
              </div>
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
            <li class="page-item"><a class="page-link" href="#">2</a></li>
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
