<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "innet";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pregunta ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $question = $row["pregunta"];
    $question_id = $row["id"];
    $correct_answer = $row["respuesta"];
  }
} else {
  echo "No hay preguntas disponibles";
}

$sql = "SELECT * FROM respuesta WHERE pregunta_id = $question_id";
$result = $conn->query($sql);

$answers = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $answers[] = array('id' => $row["id"], 'respuesta' => $row["respuesta"]);
  }

  shuffle($answers);
} else {
  echo "No hay respuestas disponibles para esta pregunta";
}

$conn->close();
?>
