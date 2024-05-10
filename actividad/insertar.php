<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "innet";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Obtener la pregunta y la respuesta del formulario
$question = $_POST["question"];
$answer = $_POST["answer"];

// Insertar la pregunta en la base de datos
$sql = "INSERT INTO pregunta (pregunta) VALUES ('$question')";
if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "Pregunta ingresada con éxito. ID de la pregunta: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Insertar la respuesta en la base de datos
$sql = "INSERT INTO respuesta (pregunta_id, respuesta) VALUES ($last_id, '$answer')";
if ($conn->query($sql) === TRUE) {
  echo "Respuesta ingresada con éxito.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>