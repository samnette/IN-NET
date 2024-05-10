<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro de Informática</title>
    <style>
        body {
    background-color: #1e1e1e;
    color: #fff;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h3 {
    color: #9575cd;
}

p {
    color: #bdbdbd;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
}

a {
    color: #9575cd;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

div.post {
    background-color: #333;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
}

div.post h3 {
    margin-bottom: 10px;
}

div.post p {
    margin-bottom: 5px;
}
    </style>
</head>
<body>

<div class="container">
<?php
include 'conexion.php'; 
//no supe cmo pero modificar esa madre aunq puede q salga error 
$sql = "SELECT mensajes.*, respuestas.* FROM tabla_foro mensajes
        LEFT JOIN tabla_foro respuestas ON mensajes.id = respuestas.identificador
        ORDER BY mensajes.fecha DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
 // QUE APAREZCAN LOS DATOS REQUERIDOS, PUEDES QUITAR LOS ECHO Y REEMPLAZARLOS X OTRA COSA
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['titulo'] . "</h3>";
        echo "<p>Autor: " . $row['autor'] . "</p>";
        echo "<p>Fecha: " . date('d-m-Y H:i:s', $row['fecha']) . "</p>";
        echo "<p>" . $row['mensaje'] . "</p>";

     
        if (!empty($row['respuestas'])) {
            echo "<h4>Respuestas:</h4>";
            echo "<ul>";
            $respuestas = explode(",", $row['respuestas']); 
            foreach ($respuestas as $respuesta_id) {
              
                echo "<li>Respuesta: ...</li>";
            }
            echo "</ul>";
        }

        echo "<a href='responder.php?id=" . $row['id'] . "'>Responder</a>";
        echo "</div>";
        echo "<hr>";
    }
} else {
    echo "No hay mensajes en el foro.";
}



$conn->close();
?>
</div>

</body>
</html>
