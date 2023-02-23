<?php
// Conectar a la base de datos
$conn = mysqli_connect("localhost", "root", "", "cloudy");

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $comentario = $_POST["comentario"];
  $publicacion_id = $_POST["publicacion_id"];
  
  // Validar los datos
  if (empty($nombre) || empty($email) || empty($comentario)) {
    echo "Todos los campos son requeridos.";
  } else {
    // Guardar el comentario en la base de datos
    $sql = "INSERT INTO comments (publicacion_id, nombre, email, comentario, fecha) VALUES ('$publicacion_id', '$nombre', '$email', '$comentario', NOW())";
    if (mysqli_query($conn, $sql)) {
      echo "Comentario agregado correctamente.";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}

// Mostrar los comentarios
$sql = "SELECT * FROM comentarios WHERE publicacion_id = $publicacion_id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='comentario'>";
    echo "<h3>" . $row["nombre"] . "</h3>";
    echo "<p>" . $row["comentario"] . "</p>";
    echo "<span class='fecha'>" . $row["fecha"] . "</span>";
    echo "</div>";
  }
} else {
  echo "No hay comentarios.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
