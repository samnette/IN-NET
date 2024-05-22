<?php 
    include_once '../Inicio/includes/user.php';
    include_once '../Inicio/includes/user_session.php';
    
    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    $nombre = $user->getNombre();
    $apellidos = $user->getApellidos();
    $nickname = $user->getusername();
    $fotografia = $user->getFotografia();
    $idUsuario = $user->getUserId();
    $Unique = $user->getUniqueId();
    $email = $user->getEmail();

?>

<?php 
include 'config.php';

include 'header.php';

$sql = "SELECT * FROM usuario";
$sql = "SELECT lugar, username, score
FROM (
    SELECT ROW_NUMBER() OVER (ORDER BY score DESC) AS lugar,
           username,
           score
    FROM scores
) AS tabla_con_lugares
WHERE username = '$nickname'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $ranking = $row["lugar"];
    $score = $row["score"];

    if ($score >= 0 && $score <= 1000) {
        $mensaje = "Estás comenzando, ¡sigue adelante! A medida que continúes aprendiendo, verás cómo tu puntuación mejora. No te desanimes por los comienzos lentos, cada paso cuenta.";
    } elseif ($score >= 1001 && $score <= 3000) {
        $mensaje = "Buen progreso, continúa así. Ya has superado los primeros obstáculos y estás avanzando de manera constante. Mantén tu enfoque y sigue esforzándote para mejorar aún más. ¡Lo estás haciendo genial!";
    } elseif ($score >= 3001 && $score <= 5000) {
        $mensaje = "¡Impresionante! Estás en el camino correcto. Tu dedicación y esfuerzo están dando frutos. Sigue así y verás cómo continúas subiendo en el ranking. Eres un ejemplo de constancia y determinación.";
    } elseif ($score >= 5001 && $score <= 10000) {
        $mensaje = "¡Excelente! Estás destacando. Tu puntuación refleja tu compromiso y habilidades. No muchos llegan tan lejos, así que siéntete orgulloso de tus logros. Sigue así, el éxito está a la vuelta de la esquina.";
    } elseif ($score >= 10001 && $score <= 15000) {
        $mensaje = "¡Increíble! Eres uno de los mejores. Tu puntuación te coloca en un grupo élite de usuarios que han demostrado un desempeño excepcional. Mantén la misma energía y seguirás alcanzando nuevas alturas.";
    } elseif ($score >= 15001 && $score <= 20000) {
        $mensaje = "¡Asombroso! Estás en la élite. Muy pocos pueden igualar tu nivel de habilidad y dedicación. Sigue desafiándote a ti mismo y rompiendo barreras. Eres una inspiración para todos los que te siguen.";
    } else {
        $mensaje = "Puntuación fuera de los rangos definidos. Parece que has alcanzado un nivel excepcional que no está dentro de los rangos estándar. ¡Felicitaciones por tu logro extraordinario!";
    }
} else {
    $ranking = "No disponible";
    $score = "No disponible";
    $mensaje = "Aun no tienes progreso.";
}

?>



<script>

function mostrarDetalles(id) {
        var overlay = document.getElementById('overlay' + id);
        overlay.style.display = 'block';
    }

    function cerrarDetalles(id) {
        var overlay = document.getElementById('overlay' + id);
        overlay.style.display = 'none';
    }

</script>

<script src="../Chat/javascript/jquery-3.3.1.min.js"></script>

<script>
    function redirigirU() {
    window.location.href = "editarRegistro.php";
}
</script>

<!DOCTYPE html>
<html lang="es">
<head>
<head>
  <meta charset="UTF-8">
  <title>PERFIL</title>
  <link href="http://localhost/IN-NET/CSS/index.css" rel="stylesheet"/>
  <link href="http://localhost/IN-NET/CSS/perfill.css" rel="stylesheet"/>

</head>
</head>
<body>
    <div class="perfil-contenedor">
        <div class="contenedor-imagen">
            <img src="../Registro/archivos/<?php echo $fotografia; ?>" alt="Foto de perfil">
        </div>
        <div class="datos">
            <p>✧ Nombre completo: <?php echo $nombre . " " . $apellidos; ?> ✧</p>
            <p>✧ Nickname: @<?php echo $nickname; ?> ✧</p>
            <p>✧ Email: <?php echo $email; ?> ✧</p>
            <p>✧ Ranking: <?php echo $ranking; ?> ✧</p>
            <p>✧ Puntuacion: <?php echo $score; ?> ✧</p><br>
            <h6>✧ Progreso: <?php echo $mensaje; ?> ✧</h6>
            <button class="boton" onclick="redirigirU()">Editar</button>
        </div>
    </div>
</body>
<footer>
        <p>&copy; 2024 IN-NET</p>
    </footer>
</html>

<?php 

} else {header("Location: ../Inicio/index.php");
  exit();
} 
?>