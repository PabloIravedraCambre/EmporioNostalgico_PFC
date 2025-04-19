<?php

/**
 * Controlador de usuarios para manejar las operaciones relacionadas con la creación, login y actualización de usuarios.
 * Este controlador interactúa con el modelo `Usuario` para realizar las acciones sobre la base de datos.
 * 
 * Este documento se encarga de manejar las funcionalidades relacionadas con la creación de usuario, el login, o la 
 * actualización de los datos de usuario. Interactúa con el modelo 'usuario.php' para trabajar con la base de datos
 *
 * @package emporionostalgico
 * 
 */

require_once "../../app/model/usuario.php";

class usuarioController {

    /**
     * Esta clase crea un nuevo usuario en la base de datos
     * Verifica también si el correo electrónico ya existe antes de crear el usuario
     *
     * @param string $nombreUsuario Nombre del usuario.
     * @param int $edadUsuario Edad del usuario.
     * @param string $correoUsuario Correo electrónico del usuario.
     * @param string $contraseniaUsuario Contraseña del usuario.
     * 
     * @return bool  retorna `false` si el correo ya existe, o `true` si el usuario fue creado satisfactoriamente
     */
    public function crearUsuario($nombreUsuario, $correoUsuario, $contraseniaUsuario) {
        $nuevoUsuario = new Usuario();

        // Verificar si el correo ya existe en la base de datos
        if ($nuevoUsuario->emailExists($correoUsuario)) {
            echo "YA EXISTE ESTE CORREO ELECTRONICO EN NUESTRA BASE DE DATOS.";
            return false;
        }

        // Asignar los valores al nuevo usuario
        $nuevoUsuario->setNombreUsuario($nombreUsuario);
        $nuevoUsuario->setCorreoUsuario($correoUsuario);
        $nuevoUsuario->setContraseniaUsuario($contraseniaUsuario);

        // Crear el usuario en la base de datos
        $nuevoUsuario->createUser();
    }

    /**
     * Esta función logea a un usuario utilizando su correo electrónico y contraseña.
     * Si el correo y la contraseña son correctas, inicia sesión y almacena la información del usuario en la sesión.
     *
     * @param string $correoUsuario Correo electrónico del usuario.
     * @param string $contraseniaUsuario Contraseña del usuario.
     * 
     * @return void
     */
    public function logearUsuario($correoUsuario, $contraseniaUsuario) {
        $usuario = new Usuario();

        // Asignar los valores al usuario
        $usuario->setCorreoUsuario($correoUsuario);
        $usuario->setContraseniaUsuario($contraseniaUsuario);

        // Verificar si el usuario existe y las credenciales son correctas
        $resultado = $usuario->loginUser();

        if ($resultado) {
            session_start();
            $_SESSION['usuario'] = $resultado['ID_Usuario'];
            $_SESSION['nombre'] = $resultado['Nombre_Usuario'];
            echo "Bienvenid@, " . $_SESSION['nombre'] . "<br>";
            return true;
        } else {
            echo "Credenciales incorrectas.";
            return false;
        }
    }

    /**
     * Esta función modifica los datos de un usuario existente en la base de datos.
     * Permite cambiar el nombre, la edad, el correo electrónico y la contraseña del usuario.
     *
     * @param int $idUsuario ID del usuario a modificar.
     * @param string $nombreUsuario Nuevo nombre del usuario.
     * @param int $edadUsuario Nueva edad del usuario.
     * @param string $correoUsuario Nuevo correo electrónico del usuario.
     * @param string $contraseniaUsuario Nueva contraseña del usuario.
     * 
     * @return void
     */
    public function modificarUsuario($idUsuario, $nombreUsuario, $correoUsuario, $contraseniaUsuario) {
        $modificarUsuario = new Usuario();

        // Asignar los valores al usuario
        $modificarUsuario->setIdUsuario($idUsuario);
        $modificarUsuario->setNombreUsuario($nombreUsuario);
        $modificarUsuario->setCorreoUsuario($correoUsuario);
        $modificarUsuario->setContraseniaUsuario($contraseniaUsuario);

        // Actualizar los datos del usuario en la base de datos
        if ($modificarUsuario->updateUser()) {
            echo "Datos actualizados correctamente.";
            $_SESSION['nombre'] = $nombreUsuario;
            echo "Bienvenid@, " . $_SESSION['nombre'] . "<br>";
        } else {
            echo "Error al actualizar los datos.";
        }
    }

}
?>
