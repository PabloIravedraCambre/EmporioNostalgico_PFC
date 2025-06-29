<?php
session_start();

//Función para desloguearse y destruir la sesión

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
          <li><a href="paginaCesta.php"><img src="./imagenesTiendaNostalgica/carrito.png" alt="carrito" class="iconos">Carro</a></li>
          <li><a href="paginaFavoritos.php"><img src="./imagenesTiendaNostalgica/favoritos.png" alt="favoritos" class="iconos">Favoritos</a></li>
          <li><a href="iniciarSesion.php"><img src="./imagenesTiendaNostalgica/iniciarSesion.png" alt="loginUsuario" class="iconos">Iniciar Sesión</a></li>
          <li><a href="páginaLogros.php"><img src="./imagenesTiendaNostalgica/logrosS.png" alt="logrosUsuario" class="iconos">Logros</a></li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <!-- Banner decorativo -->
    <div class="card mb-3">
      <img src="../view/imagenesTiendaNostalgica/imagenPresentación.png" class="card-img-top" alt="...">
    </div>
    <div class="row row-cols-1 row-cols-md-5 justify-content-center">
      <div class="col">
        <div class="card">
          <img src="./imagenesTiendaNostalgica/producto1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
            Mansión de Casper
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-Casper">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-Casper" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesTiendaNostalgica/producto1.jpg" alt="productoAmpliadoCasper">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">Está muy bien (texto en desarrollo)</p>
            <div class="d-grid gap-2 d-md-block">
              <!-- He utilizado data-bs-target para tener cada producto bien diferenciado a la hora
              de mostrar u ocultar su div correspondiente. Esto hace que se reduzca considerablemente el
              código a la hora de mostrar el texto de cada producto -->
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-casper" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-casper">
                <p class="descripciones">Esta mansión hará las delicias de los más pequeños de la casa.
                  Cuenta con un diseño intrincado, repleto de secretos y pasadizos ocultos
                </p>
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="1">
                  <button type="submit">
                    <i class="bi bi-bag-heart-fill"></i>
                  </button>
                </form>
                <!-- Formulario compra producto -->
                 <form action="../controller/cestaController.php" method="POST">
                  <input type="hidden" name="idProducto" value="1">
                  <button type="submit">
                    <i class="bi bi-cart"></i></i>
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 20€</span></h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Gárgolas -->
      <div class="col">
        <div class="card">
          <img src="./imagenesTiendaNostalgica/gárgola.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
            Muñeco Gárgolas
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-Gargola">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-Gargola" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/gárgolaAmplia.jpg" alt="zoomGargola">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">De la serie animada de las gárgolas</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-gargola" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-gargola">
                <p class="descripciones">Las gárgolas son todo un clásico de nuestras infancias</p>
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="2">
                  <button type="submit">
                    <i class="bi bi-bag-heart-fill"></i>
                  </button>
                </form>
                <!-- Formulario compra producto -->
                 <form action="../controller/cestaController.php" method="POST">
                  <input type="hidden" name="idProducto" value="2">
                  <button type="submit">
                    <i class="bi bi-cart"></i></i>
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 12€</span></h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Músculo -->

      <div class="col">
        <div class="card">
          <img src="./imagenesTiendaNostalgica/misterMusculo.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
            Míster Músculo
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-Musculo">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-Musculo" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/músculoAmpliado.jpg" alt="zoomGargola">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">¡Se estira hasta dónde quieras, y no poco!</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-musculo" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-musculo">
                <p class="descripciones">Las gárgolas son todo un clásico de nuestras infancias</p>
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

      <!-- Producto MetalGreymon -->

      <div class="col">
        <div class="card">
          <img src="./imagenesTiendaNostalgica/metalgreymon.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
            MetalGreymon
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-greymon">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-greymon" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesTiendaNostalgica/metalgreymon.png" alt="zoomGreymon">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">Un T-Rex que lanza cohetes, no se puede pedir más</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-greymon" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-greymon">
                <p class="descripciones">Digimon
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

    <!-- Producto Hércules -->

    <div class="row row-cols-1 row-cols-md-5 g-4 mt-4 mb-4 justify-content-center">
      <div class="col">
        <div class="card">
          <img src="./imagenesTiendaNostalgica/Hércules.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
            Muñeco Hércules
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-Hercules">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-Hercules" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/herculesAmpliado.png" alt="zoomHercules">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">El oficial de la serie del año 1995, ¡clásico!</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-hercules" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-hercules">
                <p class="descripciones">Hércules es genial
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="5">
                  <button type="submit">
                    <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 6€</span></h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Orca -->

      <div class="col">
        <div class="card">
          <img src="./imagenesTiendaNostalgica/streetshark.png" class="card-img-top" alt="...">
          <div class="card-body">
           <h5 class="card-title">
            Muñeco Orca
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-Orca">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-Orca" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesTiendaNostalgica/streetshark.png" alt="zoomOrca">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">Una orca con pantalones, ¿hay algo más cool que eso?</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-orca" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-orca">
                <p class="descripciones">Una increíble orca con pantalones
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="6">
                  <button type="submit">
                    <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 8,30€</span></h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Ninja Gi Joe -->

      <div class="col">
        <div class="card">
          <img src="./imagenesTiendaNostalgica/gijoe.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
            Ninja Gi Joe
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-Ninja">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-Ninja" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/gijoeAmpliado.jpg" alt="zoomNinja">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">Un ninja articulado, con accesorios geniales</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-ninja" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-ninja">
                <p class="descripciones">texto de shinobi en desarrollo
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="7">
                  <button type="submit">
                    <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 4€</span></h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Buzz Lightyear --> 

      <div class="col">
        <div class="card">
          <img src="./imagenesTiendaNostalgica/buzz.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
            Buzz Lightyear
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-Buzz">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-Buzz" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/buzzAmpliado.jpg" alt="zoomBuzz">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">¡Hasta tu cartera y más allá! Láser no funcional</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-buzz" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-buzz">
                <p class="descripciones">Las gárgolas son todo un clásico de nuestras infancias
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="8">
                  <button type="submit">
                    <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                  </button>
                </form>
                </p>
              </div>
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
        <li class="page-item"><a class="page-link" href="./página3.php">3</a></li>
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
</body>

</html>