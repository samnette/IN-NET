<?php
include 'conexion.php'; 

$servername = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = 'foro';
// no se pq lo puse
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$mensaje = $_POST['mensaje'];
$fecha = time();


$sql = "INSERT INTO tabla_foro (autor, titulo, mensaje, fecha, respuestas, identificador) 
        VALUES ('$autor', '$titulo', '$mensaje', '$fecha', 0, 0)";

if ($conn->query($sql) === TRUE) {
    echo "Mensaje agregado correctamente";
} else {
    echo "Error al agregar mensaje: " . $conn->error;
}

$conn->close();
?>
