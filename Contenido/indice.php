<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTENIDO</title>
    <link href="http://localhost/IN-NET/CSS/index.css" rel="stylesheet"/>
    <link href="http://localhost/IN-NET/CSS/indice.css" rel="stylesheet"/>
</head>
<?php 
    include_once '../Inicio/includes/user.php';
    include_once '../Inicio/includes/user_session.php';
    include_once '../Inicio/Includes/conexion.php';
    
    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
   
?>
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
              <li><a href="#">FORO</a></li>
              <li><a href="http://localhost/IN-NET/Perfil/lista.php">PERFIL</a><br>
              <li><a href="http://localhost/IN-NET/Ranking/verranking.php">RANKING</a></li>
              <li><a href="http://localhost/IN-NET/Inicio/includes/logout.php">CERRAR SESION</a></li>
            </ul>
        </nav>

    <div class="container">
        <h1>Índice de Temas</h1><br>
        <ul class="temas">
            <li><a href="http://localhost/IN-NET/Contenido/tema1.php">✧ ¡Desbloquea el Poder de la Programación! – Bienvenido a IN-NET</a></li>
            <li><a href="http://localhost/IN-NET/Contenido/tema2.php">✧ ¡Aprendamos sobre Algoritmos!</a></li>
            <li><a href="http://localhost/IN-NET/Contenido/tema3.php">✧ ¡Conoce el Mundo de los Tipos de Datos!</a></li>
            <li><a href="http://localhost/IN-NET/Contenido/tema4.php">✧ ¡Conoce el Mundo de las Variables!</a></li>
            <li><a href="http://localhost/IN-NET/Contenido/tema5.php">✧ ¡Aprende operaciones y operadores!</a></li>
            <li><a href="http://localhost/IN-NET/Contenido/tema6.php">✧ ¡Funciones funcionales!</a></li>
            <li><a href="http://localhost/IN-NET/Contenido/tema7.php">✧ ¡La estructura es importante!</a></li>
        </ul>
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