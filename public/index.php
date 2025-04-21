<?php
// Cargar configuraciones iniciales
require_once '../config/dbConnection.php';
require_once '../app/controller/usuarioController.php';

// Enrutamiento básico
if ($_SERVER['REQUEST_URI'] === '/login') {
    require_once '../app/view/iniciarSesion.php';
} elseif ($_SERVER['REQUEST_URI'] === '/registro') {
    require_once '../app/view/crearUsuario.php';
} else {
    echo "Página no encontrada.";
}