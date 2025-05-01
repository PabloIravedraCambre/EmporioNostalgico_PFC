<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Inicio Sesión - PFC</title>
    <link rel="stylesheet" href="./css/estilosSesion.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:600px;" id="justifyalign">
            <div class="col-7">
                <h1 class="display-2">Bienvenid@ al Emporio</h1>

                <p class="lead">
                    Introduce tus <mark>datos</mark>:
                </p>
                <form action="iniciarSesion.php" method="POST">

                <div class="col-11 mb-3">
                        <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required></input>
                        <div class="invalid-feedback">
                            usuario erróneo
                        </div>
                    </div>

                    <div class="col-11 mb-3">
                        <input type="email" name="Correo" class="form-control" placeholder="Correo" required></input>
                        <div class="invalid-feedback">
                            Correo erróneo / Escribe un correo
                        </div>
                    </div>

                    <div class="col-11 mb-3">
                        <input type="password" name="Contrasenia" class="form-control" placeholder="Contraseña" required></input>
                        <div class="invalid-feedback">
                            Contraseña errónea / Escribe una contraseña válida
                        </div>
                    </div>

                    <div id="boton">
                        <button type="submit" class="btn btn-primary btn-lg col-11">Iniciar sesión</button>
                    </div>
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="crearUsuario.php">¿No tienes una cuenta?</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = htmlspecialchars($_POST['Correo']);
    $contrasenia = htmlspecialchars($_POST['Contrasenia']);

    require_once "../controller/usuarioController.php";
    $usuarioController = new usuarioController();

    $resultado = $usuarioController->logearUsuario($correo, $contrasenia);

    if ($resultado) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['id_usuario'] = $resultado['ID_Usuario'];
        $_SESSION['nombre'] = $resultado['Nombre_Usuario'];
        header("Location: menuPrincipal.php");
        exit();
    } else {
        // Credenciales incorrectas
        echo "<div class='alert alert-danger'>Correo o contraseña incorrectos.</div>";
    }
}
?>
</body>

</html>