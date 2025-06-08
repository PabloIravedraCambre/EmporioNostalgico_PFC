<?php
/**
 * Este documento agrega un producto a la cesta del usuario logueado.
 * Verifica que el producto existe, que hay un usuario logueado y,
 * si ya estaba en la cesta, incrementa la cantidad.
 * 
 * @package EmporioNostalgico
 */

// Paso 1: Importamos la conexión a la base de datos
require_once '../../config/dbConnection.php';

// Paso 2: Iniciamos la sesión para usar datos del usuario
session_start();
if (!isset($_SESSION['nombre'])) {
    exit; // Usuario no logueado
}

// Paso 3: Comprobamos si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ID_Producto = $_POST['idProducto'];
    $usuarioId = $_SESSION['id_usuario'];

    try {
        $conexion = getDBConnection();

        // Paso 4: Verificamos que el producto existe
        $verificarProducto = $conexion->prepare("SELECT COUNT(*) FROM producto WHERE ID_Producto = ?");
        $verificarProducto->execute([$ID_Producto]);

        if ($verificarProducto->fetchColumn() == 0) {
            echo "Error: El producto con ID $ID_Producto no existe.";
            exit;
        }

        // Paso 5: Comprobamos si el producto ya está en la cesta del usuario
        $consultaVerificar = $conexion->prepare(
            "SELECT * FROM cesta WHERE ID_Usuario = ? AND ID_Producto = ?"
        );
        $consultaVerificar->execute([$usuarioId, $ID_Producto]);

        if ($consultaVerificar->rowCount() === 0) {
            // Paso 6: Insertamos el producto en la cesta con cantidad 1
            $consultaInsertar = $conexion->prepare(
                "INSERT INTO cesta (ID_Usuario, ID_Producto, Cantidad_Cesta) VALUES (?, ?, 1)"
            );
            $consultaInsertar->execute([$usuarioId, $ID_Producto]);

            $_SESSION['mensaje'] = "Producto agregado a la cesta correctamente.";
            header ('Location: paginaCesta.php');
            exit;

        } else {
            // Producto ya en la cesta
            $_SESSION['mensaje'] = "Producto ya disponible en la cesta.";
            header('Location: ../view/paginaCesta.php');
            exit;
        }

        // Paso 8: Redirigimos a la página de la cesta
        header('Location: ../view/paginaCesta.php');
        exit;

    } catch (PDOException $e) {
        echo "Error al agregar a la cesta: " . $e->getMessage();
    }
}
?>
