<?php
include 'conexion.php'; 

$id_mensaje = $_POST['id_mensaje'];
$autor = $_POST['autor'];
$mensaje = $_POST['mensaje'];
$fecha = time();


$sql = "INSERT INTO tabla_foro (autor, mensaje, fecha, respuestas, identificador) 
        VALUES ('$autor', '$mensaje', '$fecha', 0, '$id_mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Respuesta enviada correctamente";
} else {
    echo "Error al enviar respuesta: " . $conn->error;
}

$conn->close();
header("location: foro.php");
?>
