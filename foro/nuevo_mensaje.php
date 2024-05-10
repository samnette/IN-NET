<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje</title>
    <style>
        body {
    background-color: #1e1e1e;
    color: #fff;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 10px;
    background-color: #333;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

h2 {
    color: #9575cd;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    color: #bdbdbd;
    margin-bottom: 5px;
}

input[type="text"],
textarea {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #9575cd;
    border-radius: 5px;
    background-color: #1e1e1e;
    color: #fff;
}

input[type="submit"] {
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #9575cd;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #7e57c2;
}
    </style>
</head>
<body>
    <h2>Agregar Nuevo Mensaje</h2>
    <form action="procesar_mensaje.php" method="post">
        <label for="autor">Autor:</label><br>
        <input type="text" id="autor" name="autor" required><br><br>

        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
