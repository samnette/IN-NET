<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OPERACIONES Y OPERADORES</title>
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
  
  <div class="container2">
    <h2>✧¡Aprende operaciones y operadores!✧</h2>

    <p>¡Bienvenido a una emocionante aventura donde explorarás las operaciones aritméticas y los operadores lógicos y booleanos, herramientas esenciales en el fascinante mundo de la programación! En este viaje educativo, te sumergirás en el arte de calcular, tomar decisiones y controlar el flujo de tu código. ¡Prepárate para desbloquear nuevas habilidades y enfrentarte a desafíos con confianza!</p>
    <br><br>

    <div class="level">
      <h4>Nivel 1: Explorando las Operaciones Aritméticas.</h4>
      </div>
      <p>Las operaciones aritméticas son como las herramientas en tu caja de herramientas: te permiten realizar cálculos básicos con números. Suma, resta, multiplicación y división son tus aliados en la resolución de problemas numéricos. Aprenderás cómo utilizar estas operaciones para manipular datos y realizar cálculos esenciales en tus programas.</p>
      <br><br>

    <div class="level">
      <h4>Nivel 2: Descifrando Problemas con Operadores Lógicos.</h4>
    </div>
      <p>Los operadores lógicos son como las claves que abren puertas en un laberinto: te permiten evaluar condiciones y tomar decisiones basadas en ellas. Con operadores como "y", "o" y "no", podrás comparar valores y evaluar situaciones complejas en tu código. Aprenderás cómo utilizar estos operadores para crear lógica en tus programas y controlar el flujo de ejecución.</p>
      <br><br>

    <div class="level">
      <h4>Nivel 3: Tomando Decisiones con Operadores Booleanos.</h4>
      </div>
      <p>Los operadores booleanos son como interruptores que activan o desactivan funciones en tu código: te permiten evaluar expresiones y determinar si son verdaderas o falsas. Con operadores como "igual a", "mayor que" y "menor que", podrás comparar valores numéricos y tomar decisiones basadas en ellos. Aprenderás cómo utilizar estos operadores para crear condiciones y controlar el flujo de tu programa.</p>
      <br><br>
      

    <div class="level">
      <h4>¡Te mostramos algunos ejemplos!</h3>
      </div>
      <ol>
      <ul>
        <li><strong>Operaciones Aritméticas:</strong>
            <ul>
                <li><code># Suma<br>resultado_suma = 10 + 5  # resultado_suma es igual a 15</code></li>
                <li><code># Resta<br>resultado_resta = 20 - 8  # resultado_resta es igual a 12</code></li>
                <li><code># Multiplicación<br>resultado_multiplicacion = 6 * 4  # resultado_multiplicacion es igual a 24</code></li>
                <li><code># División<br>resultado_division = 15 / 3  # resultado_division es igual a 5.0</code></li>
            </ul><br>
        </li>
        <li><strong>Operadores Lógicos:</strong>
            <ul>
                <li><code># Operador AND<br>condicion_and = (5 > 3) and (10 < 20)  # condicion_and es igual a True</code></li>
                <li><code># Operador OR<br>condicion_or = (5 < 3) or (10 < 20)  # condicion_or es igual a True</code></li>
                <li><code># Operador NOT<br>condicion_not = not (5 < 3)  # condicion_not es igual a True</code></li>
            </ul><br>
        </li>
        <li><strong>Operadores Booleanos:</strong>
            <ul>
                <li><code># Igual a<br>igual_a = (10 == 10)  # igual_a es igual a True</code></li>
                <li><code># Mayor que<br>mayor_que = (15 > 10)  # mayor_que es igual a True</code></li>
                <li><code># Menor que<br>menor_que = (5 < 10)  # menor_que es igual a True</code></li>
            </ul><br>
        </li>
    </ul><br>
</ol>
<br>

<div class="level">
    <h4>¡Video explicativo!</h4><br><br>
    </div>
    <div class="video-container">
    <a href="http://localhost/IN-NET/Contenido/Script/tema5.php" class="button">Ver Script</a>
        <video controls>
            <source src="http://localhost/IN-NET/Contenido/Videos/tema5.mp4" type="video/mp4">
            Tu navegador no admite el elemento de video.
        </video><br><br><br><br>
    </div>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/tema4.php" class="button">Regresar</a>
      <a href="http://localhost/IN-NET/Contenido/tema6.php" class="button">Siguiente</a><br><br>
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
