<?php 
    include_once '../Inicio/includes/user.php';
    include_once '../Inicio/includes/user_session.php';
    
    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>RANKING</title>
    <link href="http://localhost/IN-NET/CSS/index.css" rel="stylesheet"/>
    <link href="http://localhost/IN-NET/CSS/rankingg.css" rel="stylesheet"/>
</head>
<body>
<nav class="nav">
                <div class=librologo>
                <img class="libro" src="http://localhost/IN-NET/Imagenes/general/logo-r.png">
                    <div class="logo"> 
                        <a href="index.php">IN-NET</a>
                    </div> 
                </div>

                <ul class="menu">
                <?php $adminson = $user->getAdmin(); if ($adminson == 1) {?>
                <li><a href="http://localhost/IN-NET/admin/home.php">ADMIN</a></li>
                <?php } ?>
              <li><a href="http://localhost/IN-NET/Juego/index.php">¡A JUGAR!</a></li>
              <li><a href="http://localhost/IN-NET/Contenido/indice.php">CONTENIDO</a><br>
              <li><a href="https://discord.gg/H8rsHTrh" target="_blank">FORO</a></li>
              <li><a href="http://localhost/IN-NET/Perfil/lista.php">PERFIL</a><br>
              <li><a href="http://localhost/IN-NET/Ranking/verranking.php">RANKING</a></li>
              <li><a href="http://localhost/IN-NET/Inicio/includes/logout.php">CERRAR SESION</a></li>
            </ul>
        </nav>

<?php
$host = 'localhost';
$bd = 'innet';
$user = 'root';
$password = "";

$conexion = new mysqli($host, $user, $password, $bd);

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

$sql = "SELECT ROW_NUMBER() OVER (ORDER BY score DESC) AS lugar,
               username,
               score
        FROM scores"; 
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Ranking</h2>";
    echo '<div class="contenedor"><ol>"';
    while($row = $result->fetch_assoc()) {
        $class = "";
        if ($row["lugar"] == 1) {
            $class = "primero";
        } elseif ($row["lugar"] == 2) {
            $class = "segundo";
        } elseif ($row["lugar"] == 3) {
            $class = "tercero";
        } else {
            $class = "monton";
        }
        echo "<p class=\"$class\">✧ #" . $row["lugar"] . ". " . $row["username"] . " - Puntuación: " . $row["score"] . " ✧</p>";
    }
    echo "</ol></div>";
} else {
    echo "No hay registros en el ranking.";
}

$conexion->close();
?>
</body>
<footer>
        <p>&copy; 2024 IN-NET</p>
    </footer>

    <?php 

} else {header("Location: ../Inicio/index.php");
  exit();
} 
?>