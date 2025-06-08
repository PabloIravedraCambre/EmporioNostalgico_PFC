<?php
session_start();
if (isset($_SESSION['mensaje'])) {
    echo '<div class="alert alert-info" role="alert">'
         . $_SESSION['mensaje'] .
         '</div>';
    unset($_SESSION['mensaje']);
}


// Paso 1: Importamos la conexión y verificamos sesión
require_once "../../config/dbConnection.php";

try {
    // Paso 2: Obtenemos el ID del usuario desde la sesión
    /**
     * @var int $usuarioId es el ID del usuario logueado en la sesión actual
     */

    $idUsuario = $_SESSION['id_usuario']; // Este ID debe haberse guardado al iniciar sesión

    
    // Paso 3: Establecemos conexión con la base de datos
    /**
     * @var PDO $conexion esto es para hacer la conexión con la base de datos
     */
    $conexion = getDBConnection();

    /**
     * Aquí es dónde se va a obtener, de la base de datos, la lista de los productos
     * en la cesta que seleccionó el usuario
     * 
     * @var PDOStatement $consulta
     */

    // Paso 4: Consultamos la cesta del usuario logueado
    $consulta = $conexion->prepare(
    "SELECT c.ID_Cesta, p.ID_Producto, p.Nombre_Producto, p.Precio, c.Cantidad_Cesta
     FROM cesta c 
     INNER JOIN producto p ON c.ID_Producto = p.ID_Producto
     WHERE c.ID_Usuario = ?"
    );
    $consulta->execute([$idUsuario]);

    /**
     * @var array $favoritos es un array asociativo que contiene los favoritos del usuario
     * que esté logueado en ese momento, para luego mostrarlos en la página
     */

    $cesta = $consulta->fetchAll(PDO::FETCH_ASSOC);

    // Paso 5: Mostramos los productos en la cesta si existen
    if (!empty($cesta)) {
        echo "<ul class='list-group'>";
        echo "<p>Productos en tu cesta:</p>";
        foreach ($cesta as $producto) {
            echo "<li class='list-group-item'>{$producto['Nombre_Producto']}</li>";
            echo "<hr>";  
        }
    } else {
        echo "<div class='favorito-item'>";
        echo "<p>No tienes productos en la cesta.</p>";
    }
    /**
     * En caso de que haya algún tipo de error, se cargará un mensaje que alerta
     * de ese posible error a la hora de cargar los favoritos
     * 
     * @var string $e Mensaje de error
     */
} catch (PDOException $e) {
    echo "<p>Error al cargar la cesta: " . $e->getMessage() . "</p>";
}
?>
