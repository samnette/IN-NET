<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROGRAMACION</title>
  <link href="http://localhost/IN-NET/CSS/index.css" rel="stylesheet"/>
  <link href="http://localhost/IN-NET/CSS/contenido.css" rel="stylesheet"/>
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
                        <a href="http://localhost/IN-NET/index.php">IN-NET</a>
                    </div> 
                </div>

                <ul class="menu">
                <?php $adminson = $user->getAdmin(); if ($adminson == 1) {?>
                <li><a href="http://localhost/IN-NET/admin/home.php">ADMIN</a></li>
                <?php } ?>
              <li><a href="http://localhost/IN-NET/actividad/actividad.php">ACTIVIDADES</a></li>
              <li><a href="http://localhost/IN-NET/Contenido/indice.php">CONTENIDO</a><br>
              <li><a href="#">FORO</a></li>
              <li><a href="http://localhost/IN-NET/Perfil/lista.php">PERFIL</a><br>
              <li><a href="http://localhost/IN-NET/Inicio/includes/logout.php">CERRAR SESION</a></li>
            </ul>
        </nav>
  
  <div class="container2">
    <h2>✧ ¡Desbloquea el Poder de la Programación! – Bienvenido a IN-NET ✧</h2>

    <p>¿Listo para sumergirte en el emocionante mundo de la programación? ¡Prepárate para nivelar tus habilidades y convertirte en el maestro del código! Pero espera, ¿qué es realmente la programación?</p>
                <br><br>
    <div class="level">
      <h4>Nivel 1: Comprender el Código</h3>
      </div>
      <p>La programación es como el tutorial inicial de un juego: te enseña los fundamentos. Es el arte de escribir instrucciones para que las máquinas hagan tu voluntad. ¿Cómo se hace? ¡Con un lenguaje especial llamado código!</p>
    <br><br>

    <div class="level">
      <h4>Nivel 2:Armas del Jugador: Lenguajes de Programación</h3>
    </div>
      <p>Imagina los lenguajes de programación como diferentes clases de personajes en un juego. Tienes a los magos flexibles como Python, a los guerreros robustos como Java, y a los ágiles asesinos como JavaScript. ¡Elige tu arma sabiamente!</p>
    <br><br>

    <div class="level">
      <h4>Nivel 3:¡A Construir Tu Propio Mundo!</h3>
      </div>
      <p>Con la programación, eres como el arquitecto de un universo virtual. Desde crear mundos fantásticos hasta construir aplicaciones útiles, ¡el poder está en tus manos! Es como si fueras el desarrollador de tu propio juego, ¡pero en la vida real! La programación te permite crear lo que quieras, ¡sin límites!</p>
    <br><br>

    <p>La programación es como un juego de mundo abierto: siempre hay algo nuevo por descubrir.</p>

    <p>¡Sumérgete en este mundo y nunca te aburrirás!</p>
    <br><br>

    <div class="level">
    <h4>¡Video explicativo!</h4><br><br>
    </div>
    <div class="video-container">
    <a href="http://localhost/IN-NET/Contenido/Script/tema1.php" class="button">Ver Script</a>
        <video controls>
            <source src="http://localhost/IN-NET/Contenido/Videos/tema1.mp4" type="video/mp4">
            Tu navegador no admite el elemento de video.
        </video><br><br><br><br>
    </div>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/indice.php" class="button">Regresar</a>
      <a href="http://localhost/IN-NET/Contenido/tema2.php" class="button">Siguiente</a><br><br>
    </div>
  </div>
  
  <br><br>
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
</html>
