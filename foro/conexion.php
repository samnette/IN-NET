<?php
$servername = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = 'foro';


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
