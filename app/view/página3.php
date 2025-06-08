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

//Función para desloguearse y destruir la sesión

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header("Refresh:0");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
  header("Location: actualizarUsuario.php"); //Integrar función de actualizar los datas del usuario
  exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú Principal - Emporio Nostálgico</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="./css/estilosPrincipal.css">
  <script src="../view/js/funcionesEmporio.js"></script>
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
            <figcaption class="blockquote-footer">
              Pablo Iravedra Cambre
            </figcaption>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contacto</h4>
            <ul class="list-unstyled">
              <li><a href="https://github.com/PabloIravedraCambre/EmporioNostalgico_PFC" class="text-white">Sígueme en Github</a></li>
              <li><a href="#" class="text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Preferencias</a></li>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasRightLabel">¿Qué te interesa más?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <form action="#" method="POST">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="elecciones" id="videojuegos" value="videojuegos">
                      <label class="form-check-label" for="videojuegos">
                        Videojuegos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="elecciones" id="películas" value="películas">
                      <label class="form-check-label" for="películas">
                        Películas
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="elecciones" id="juguetes" value="juguetes">
                      <label class="form-check-label" for="juguetes">
                        Juguetes
                      </label>
                    </div>
                    <label for="fecha">Introduce tu fecha de nacimiento:</label>
                    <input type="date" name="fecha" id="fecha">
                    <input type="submit" value="Enviar">
                  </form>
                </div>
              </div>
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
          <li><a href="páginaLogros.php"><img src="./imagenesTiendaNostalgica/logrosS.png" alt="logrosUsuario" class="iconos">Logros</a></li>
        </ul>
      </div>
    </div>
    <!-- Banner decorativo -->
    <div class="card mb-3">
      <img src="../view/imagenesTiendaNostalgica/bannerTerceraPágina.png" class="card-img-top" alt="...">
    </div>
    <!-- Idea para la etiqueta <dialog> sacada de este vídeo: https://www.youtube.com/watch?v=ywtkJkxJsdg&ab_channel=WebDevSimplified -->
    <dialog data-modal>
      <div>
        <h1 id="tituloJuego"></h1>
        <p id="descripcionJuego"></p>
        <img class="juegoImagenModal" alt="imagen del Juego">
      </div>
      <button data-close-modal>Cerrar</button>
    </dialog>

    <div class="containerJuegos">
      <div class="juegoZoom" data-juego="Crash Bandicoot">
        <img src="imagenesVideojuegos/crashRD.png" alt="crash bandicoot" class="juegoImagen">

      </div>
      <div class="juegoZoom" data-juego="Koudelka">
        <img src="imagenesVideojuegos/koudelkaRD.png" alt="koudelka" class="juegoImagen">

      </div>
      <div class="juegoZoom" data-juego="Tombi">
        <img src="imagenesVideojuegos/tombiRD.png" alt="tombi" class="juegoImagen">

      </div>
      <div class="juegoZoom" data-juego="Journey to Silius">
        <img src="imagenesVideojuegos/silius.png" alt="Journey to Silius" class="juegoImagen">

      </div>
      <div class="juegoZoom" data-juego="Donkey Kong Country 2">
        <img src="imagenesVideojuegos/donkey.png" alt="Donkey Kong Country 2" class="juegoImagen">

      </div>
      <div class="juegoZoom" data-juego="Yoshi's Island">
        <img src="imagenesVideojuegos/yoshis.png" alt="Yoshi's Island" class="juegoImagen">

      </div>
      <div class="juegoZoom" data-juego="Kid Klown in Crazy Chase">
        <img src="imagenesVideojuegos/kidklown.png" alt="Kid Klown in Crazy Chase" class="juegoImagen">

      </div>
      <div class="juegoZoom" data-juego="Super Mario World">
        <img src="imagenesVideojuegos/marioworld.png" alt="Super Mario World" class="juegoImagen">

      </div>
      <div class="juegoZoom" data-juego="Resident Evil 4">
        <img src="imagenesVideojuegos/residentEvil.png" alt="Resident Evil 4" class="juegoImagen">

      </div>
      <div class="juegoZoom" data-juego="Dark Cloud">
        <img src="imagenesVideojuegos/darkCloud.png" alt="Dark Cloud" class="juegoImagen">

      </div>
      <div class="juegoZoom" data-juego="TimeSplitters 3">
        <img src="imagenesVideojuegos/timesplitters3.png" alt="TimeSplitters 3" class="juegoImagen">
      </div>
      
      <div class="juegoZoom" data-juego="Grand Theft Auto: San Andreas">
        <img src="imagenesVideojuegos/sanAndreas.png" alt="Grand Theft Auto: San Andreas" class="juegoImagen">
      </div>

    </div>
  </header>
  <!-- Paginación Bootstrap -->
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link">Anterior</a>
      </li>
      <li class="page-item"><a class="page-link" href="./menuPrincipal.php">1</a></li>
      <li class="page-item"><a class="page-link" href="./página2.php">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Siguiente</a>
      </li>
    </ul>
  </nav>

  <!-- Footer -->

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap">
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <span class="mb-3 mb-md-0 fw-bolder text-decoration-underline">© 2025 El Emporio Nostálgico</span>
      </div>
  </div>
  </main>
  <!-- Bootstrap Bundle con JS incluido -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>