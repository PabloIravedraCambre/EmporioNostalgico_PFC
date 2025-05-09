<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario - PFC</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/registrations/registration-7/assets/css/registration-7.css">
    <link rel="stylesheet" href="./css/estilosCrearUsuario.css">
</head>
<body>
    <!-- Registration 7 - Bootstrap Brain Component -->
<section class="bg-light p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
        <div class="card border border-light-subtle rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <div class="text-center mb-4">
                    <a href="./menuPrincipal.php">
                      <img src="./imagenesTiendaNostalgica/logoEmporio2.png" alt="Logo Emporio" width="175" height="57">
                    </a>
                  </div>
                  <h2 class="h4 text-center">Registro</h2>
                  <h3 class="fs-6 fw-normal text-secondary text-center m-0">Introduce tus datos para registrarte:</h3>
                </div>
              </div>
            </div>
            <form action="" method="POST">
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nombre" id="nombreUsuario" placeholder="Nombre" required>
                    <label for="nombreUsuario" class="form-label">Nombre</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="tunombre@ejemplo.com" required>
                    <label for="email" class="form-label">Correo</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="contraseña" id="contraUsuario" value="" placeholder="Contraseña" required>
                    <label for="contraUsuario" class="form-label">Contraseña</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="deacuerdo" id="deacuerdo" required>
                    <label class="form-check-label text-secondary" for="deacuerdo">
                      Acepto los <a href="#!" class="link-primary text-decoration-none">términos y condiciones</a>
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-primary" type="submit" name="registrarse" id="registrarse">Registrarse</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-12">
                <p class="mt-5 mb-5">O continúa con:</p>
                <div class="d-flex gap-2 gap-sm-3 justify-content-center">
                  <a href="#!" class="btn btn-lg btn-outline-danger p-3 lh-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                      <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                    </svg>
                  </a>
                  <a href="#!" class="btn btn-lg btn-outline-primary p-3 lh-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                  </a>
                  <a href="#!" class="btn btn-lg btn-outline-info p-3 lh-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                  </a>
                  <a href="#!" class="btn btn-lg btn-outline-dark p-3 lh-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="formulario-php">
        <?php
        /**
         * LoginUsuario.php se encarga de trabajar con los formularios de login, el de registrar, y el de actualizar (éste último permite al usuario actualizar su nombre, edad, etc)
         *
         * @package emporionostalgico
         */

        require_once "../controller/usuarioController.php";

        /**
         * Controlador que permite trabajar con los datos que ha introducido el usuario
         *
         * @var usuarioController $UsuarioController
         */
        $UsuarioController = new usuarioController();

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['registrarse'])) {
            /**
             *  Éste método maneja el registro de un nuevo usuario.
             *
             * htmlspecialchars => Sanea los datos de entrada y los envía al controlador.
             *
             * @param string $_POST['Nombre_Usuario'] Nombre del usuario.
             * @param string $_POST['Correo_Usuario'] Correo del usuario.
             * @param string $_POST['Contrasenia_Usuario'] Contraseña del usuario.
             */
            $campoNombreSaneado = htmlspecialchars($_POST['nombre']);
            $campoCorreoUsuarioSaneado = htmlspecialchars($_POST['email']);
            $campoContraseniaUsuarioSaneado = htmlspecialchars($_POST['contraseña']);
            
            // Llamada al controlador para crear el nuevo usuario
            $UsuarioController->crearUsuario($campoNombreSaneado, $campoCorreoUsuarioSaneado, $campoContraseniaUsuarioSaneado);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
            /**
             * Éste método maneja el inicio de sesión del usuario.
             *
             * htmlspecialchars => Sanea los datos de entrada y los envía al controlador.
             *
             * @param string $_POST['Correo_Usuario'] Correo del usuario.
             * @param string $_POST['Contrasenia_Usuario'] Contraseña del usuario.
             */
            $campoCorreoUsuarioSaneado = htmlspecialchars($_POST['Correo_Usuario']);
            $campoContraseniaUsuarioSaneado = htmlspecialchars($_POST['Contrasenia_Usuario']);
            
            // Llamada al controlador para iniciar sesión del usuario
            $UsuarioController->logearUsuario($campoCorreoUsuarioSaneado, $campoContraseniaUsuarioSaneado);
            header("Location: menuPrincipal.php"); // Redirige a la página principal después de iniciar sesión
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
             * Éste método maneja la actualización de información del usuario.
             *
             * htmlspecialchars => Sanea los datos de entrada y los envía al controlador.
             *
             * @param int $_SESSION['usuario'] ID del usuario en sesión.
             * @param string $_POST['Nombre_Usuario'] Nombre actualizado del usuario.
             * @param int $_POST['Edad_Usuario'] Edad actualizada del usuario.
             * @param string $_POST['Correo_Usuario'] Correo actualizado del usuario.
             * @param string $_POST['Contrasenia_Usuario'] Contraseña actualizada del usuario.
             */
            $idUsuario = htmlspecialchars($_SESSION['usuario']);
            $nombreUsuario = htmlspecialchars($_POST['Nombre_Usuario']);
            $edadUsuario = htmlspecialchars($_POST['Edad_Usuario']);
            $correoUsuario = htmlspecialchars($_POST['Correo_Usuario']);
            $contraseniaUsuario = htmlspecialchars($_POST['Contrasenia_Usuario']);

            // Llamada al controlador para modificar los datos del usuario
            $UsuarioController->modificarUsuario($idUsuario, $nombreUsuario, $edadUsuario, $correoUsuario, $contraseniaUsuario);
        }
        ?>
        
        <!-- Logout y Actualización -->
        <?php
        
        if (isset($_SESSION['nombre'])) {
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
    </div>
</body>
</html>