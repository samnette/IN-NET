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
       
$result = $conn->query($sql);

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
  <link href="http://localhost/IN-NET/CSS/perfil.css" rel="stylesheet"/>

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
            <p>✧ Ranking: <?php echo "Eo"; ?> ✧</p>
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