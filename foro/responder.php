<?php
include 'conexion.php'; 

$id_mensaje = null;
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_mensaje = $_GET['id'];
} else {
   // echo "ID de mensaje inválido";
}

// IGUAL QUITAR ECHO Y REEMPLAZARLOS PA Q SE VEA MAS LIMPIO O NOSE
//EL ID_MENSAJE SE SUPONE QUE ES EL IDENTIFICADOR DEL MISMO
echo "<h2>Responder</h2>";
echo "<form action='procesar_respuesta.php' method='post'>";
echo "<input type='hidden' name='id_mensaje' value='$id_mensaje'>";
echo "<label for='autor'>Autor:</label><br>";
echo "<input type='text' id='autor' name='autor' required><br><br>";
echo "<label for='mensaje'>Mensaje:</label><br>";
echo "<textarea id='mensaje' name='mensaje' rows='4' cols='50' required></textarea><br><br>";
echo "<input type='submit' value='Enviar'>";
echo "</form>";
?>
