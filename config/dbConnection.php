<?php

function getDBConnection() {
    // Configuración de la base de datos
    $host = 'db';
    $db_name = "emporionostalgico";
    $username = "root";
    $password = "root";

    try {
        // Intentamos establecer la conexión con PDO
        $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $username, $password);
        
        // Establecemos el modo de error para que PDO lance excepciones
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retornamos la conexión PDO en caso de éxito
        return $conn;
    } catch (PDOException $e) {
        // Si ocurre un error, mostramos el mensaje de error
        echo 'Error de conexión: ' . $e->getMessage();
        
        // Devolvemos null en caso de error
        return null;
    }
}

?>
