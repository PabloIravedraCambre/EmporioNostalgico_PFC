<?php

function getDBConnection()
{
  // Configuración de la base de datos
  $host = 'db';
  $db_name = "emporionostalgico";
  $username = "root";
  $password = "root";

  try {
    $bbddlogro = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", "$username", "$password");
    $bbddlogro->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    exit('No se pudo conectar a la base de datos' . $e->getMessage());
  }

  $sql = "SELECT ID_Logro, ID_Usuario, Nombre_Logro, Fecha_desbloqueo FROM emporionostalgico WHERE ID_Usuario = :id_usuario";

  $stmt = $bbddlogro->prepare($sql);
  $stmt->bindParam(':id_usuario', $_GET['q'], PDO::PARAM_STR);
  $stmt->execute();
  $stmt->closeCursor();
}

echo "<table>";
echo "<tr>";
echo "<th>ID_Logro</th>";
echo "<th>ID_Usuario</th>";
echo "</table>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logros del usuario - Emporio Nostálgico</title>
</head>

<body>
  <!-- <img src="./imagenesLogros/logro3favoritos.png" alt="3 productos visitados">
  <img src="./imagenesLogros/logroCincoProductos.png" alt="5 productos en favoritos">
  <img src="./imagenesLogros/logroComprarProducto.png" alt="comprar producto">
  <img src="./imagenesLogros/logroCrearUsuario.png" alt="crear usuario"> -->

  <div id="mostrarLogro">Aquí se muestran los logros que has obtenido hasta el momento.</div>

  
</body>

</html>