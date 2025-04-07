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
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Un pequeño vistazo a lo que encontrarás</h1>
        <p class="lead text-muted">"Somos nuestro pasado, y siempre podremos volver a él."</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Producto anterior</a>
          <a href="#" class="btn btn-secondary my-2">Siguiente Producto</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
              xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Imagen de muestra"
              preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Imagen de muestra</title>
              <rect width="100%" height="100%" fill="#55595c" />
              <text x="50%" y="50%" fill="#eceeef" dy=".3em" text-anchor="middle">Miniatura</text>
            </svg>

            <div class="card-body">
              <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo como introducción natural a contenido adicional. Este contenido es un poco más largo.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                </div>
                <small class="text-muted">9 minutos</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Puedes duplicar este bloque para crear más tarjetas -->

      </div>
    </div>
  </div>
</main>

<!-- Bootstrap Bundle con JS incluido -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
