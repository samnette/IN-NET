<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "innet";
include 'data.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$user_answer_id = $_POST["respuesta"];

$sql = "SELECT * FROM respuesta WHERE id = $user_answer_id AND correcta = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "¡Respuesta correcta!";
  echo "<script>setTimeout(function(){window.location.href='actividad.php'},5000);</script>";
} else {
  echo "Respuesta incorrecta";
  echo "<script>setTimeout(function(){window.location.href='actividad.php'},5000);</script>";
}

$conn->close();
?>