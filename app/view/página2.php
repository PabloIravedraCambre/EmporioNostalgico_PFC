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
  header("Location: actualizarUsuario.php"); //Integrar función de actualizar los datos del usuario
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
  </header>
  <main>
    <!-- Banner decorativo -->
    <div class="card mb-3">
      <img src="../view/imagenesTiendaNostalgica/bannerSegundaPagina.png" class="card-img-top" alt="...">
    </div>
    <div class="row row-cols-1 row-cols-md-5 justify-content-center">
      <div class="col">
        <div class="card">
          <img src="./imagenesPeliculas/hook.png" class="card-img-top" alt="Hook">
          <div class="card-body">
            <h5 class="card-title">
            Hook 
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-Hook">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-Hook" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="inert">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/hookAmpliado.jpg" alt="productoAmpliadoHook">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">Grande Robin Williams</p>
            <div class="d-grid gap-2 d-md-block">
              <!-- He utilizado data-bs-target para tener cada producto bien diferenciado a la hora
              de mostrar u ocultar su div correspondiente. Esto hace que se reduzca considerablemente el
              código a la hora de mostrar el texto de cada producto -->
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-casper" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-casper">
                <p class="descripciones">Una película encantadora que nunca envejece
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="9">
                  <button type="submit">
                    <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 10€</span></h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Gárgolas -->
      <div class="col">
        <div class="card">
          <img src="./imagenesPeliculas/jumanji.png" class="card-img-top" alt="jumanji">
          <div class="card-body">
            <h5 class="card-title">
            Jumanji
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-Jumanji">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-Jumanji" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="inert">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/jumanjiAmpliado.jpg" alt="productoAmpliadoJumanji">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">¡Es una estampida!</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-gargola" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-gargola">
                <p class="descripciones">El juego de mesa que cambió nuestras vidas
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="10">
                  <button type="submit">
                    <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 19€</span></h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Músculo -->

      <div class="col">
        <div class="card">
          <img src="./imagenesPeliculas/planeta.png" class="card-img-top" alt="el planeta del tesoro">
          <div class="card-body">
            <h5 class="card-title">
            El Planeta del Tesoro
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-Planeta">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-Planeta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="inert">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/planetaAmpliado.jpg" alt="productoAmpliadoPlaneta">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">Una joya infravalorada</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-musculo" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-musculo">
                <p class="descripciones">En esta película hay planetas y también tesoros, no es farol
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="11">
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

      <!-- Producto MetalGreymon -->

      <div class="col">
        <div class="card">
          <img src="./imagenesPeliculas/pesadilla.png" class="card-img-top" alt="pesadilla antes de navidad">
          <div class="card-body">
            <h5 class="card-title">
            Pesadilla antes de Navidad
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-pesadilla">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-pesadilla" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="inert">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/pesadillaAmpliado.jpg" alt="productoAmpliadoPesadilla">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">El verdadero clásico de Tim Burton</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-greymon" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-greymon">
                <p class="descripciones">La canción de Halloween-town es genial
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="12">
                  <button type="submit">
                    <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 22€</span></h4>
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
          <img src="./imagenesPeliculas/nemonic.png" class="card-img-top" alt="nemonic">
          <div class="card-body">
            <h5 class="card-title">
            Johnny Mnemonic
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-nemonic">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-nemonic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="inert">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/nemonicAmpliado.jpg" alt="productoAmpliadoNemonic">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">Matrix antes de matrix</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-hercules" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-hercules">
                <p class="descripciones">Curiosa distopía cyberpunk
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="13">
                  <button type="submit">
                    <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 3€</span></h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Orca -->

      <div class="col">
        <div class="card">
          <img src="./imagenesPeliculas/aceventura.png" class="card-img-top" alt="aceventura">
          <div class="card-body">
           <h5 class="card-title">
            Ace Ventura
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-ace">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-ace" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="inert">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/aceAmpliado.jpg" alt="aceAmpliado">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">Jim Carrey nunca falla</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-orca" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-orca">
                <p class="descripciones">la escena del rinoceronte es legendaria
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="14">
                  <button type="submit">
                    <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 6,20€</span></h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Ninja Gi Joe -->

      <div class="col">
        <div class="card">
          <img src="./imagenesPeliculas/aladdin.png" class="card-img-top" alt="aladdin">
          <div class="card-body">
            <h5 class="card-title">
            Aladdin
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-aladdin">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-aladdin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="inert">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/aladdinAmpliado.jpg" alt="aladdinAmpliado">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">Un mundo ideaaaaaal</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-ninja" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-ninja">
                <p class="descripciones">Por culpa del mono Abu, Aladdin casi muere
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="15">
                  <button type="submit">
                    <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 29€</span></h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Buzz Lightyear --> 

      <div class="col">
        <div class="card">
          <img src="./imagenesPeliculas/bladerunner.png" class="card-img-top" alt="bladerunner">
          <div class="card-body">
            <h5 class="card-title">
            Blade Runner
            </h5>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-blade">
                <i class="bi bi-zoom-in"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal-blade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="inert">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../view/imagenesProductosAmpliados/bladeAmpliado.jpg" alt="bladeAmpliado">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <p class="card-text fst-italic">Cómo lágrimas en la lluvia</p>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" data-bs-toggle="collapse" href="#divOculto-buzz" aria-expanded="false" aria-controls="divOculto">Ver Producto</button>
              <div class="collapse" id="divOculto-buzz">
                <p class="descripciones">En su momento esta película fue un fracaso, la verdad, no entiendo por qué: es maravillosa!
                <form action="../controller/favoritoUsuarioController.php" method="POST">
                  <input type="hidden" name="productoId" value="16">
                  <button type="submit">
                    <img src="../view/imagenesTiendaNostalgica/coraFavoritos.png" alt="iconoFavorito">
                  </button>
                </form>
                </p>
              </div>
              <h4><span class="badge bg-secondary mt-3">Precio: 37€</span></h4>
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
        <li class="page-item"><a class="page-link" href="menuPrincipal.php">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
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
            <svg class="bi" width="30" height="24" aria-hidden="true">
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