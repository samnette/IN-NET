<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALGORITMOS</title>
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
              <li><a href="#">FORO</a></li>
              <li><a href="http://localhost/IN-NET/Perfil/lista.php">PERFIL</a><br>
              <li><a href="http://localhost/IN-NET/Ranking/verranking.php">RANKING</a></li>
              <li><a href="http://localhost/IN-NET/Inicio/includes/logout.php">CERRAR SESION</a></li>
            </ul>
        </nav>
  
  <div class="container2">
    <h2>✧¡Aprendamos sobre Algoritmos!✧</h2>

    <p>Aquí comenzarás tu viaje para dominar los fundamentos de los algoritmos, las herramientas esenciales que te guiarán a través de los desafíos de la programación. Prepárate para aprender de manera divertida y efectiva.</p>
                <br><br>
    <div class="level">
      <h4>Nivel 1: Comprende los Algoritmos.</h3>
      </div>
      <p>Los algoritmos son como recetas paso a paso que te guían para resolver problemas. Piensa en ellos como las instrucciones que sigues para jugar un juego. Desde encontrar el camino más corto hasta resolver un rompecabezas, los algoritmos te ayudan a llegar a la solución de manera eficiente.</p>
<br><br>
    <div class="level">
      <h4>Nivel 2: Analiza y Diseña tus Estrategias.</h3>
    </div>
      <p>En este nivel, aprenderás a analizar problemas y diseñar estrategias para resolverlos. Es como planificar tu ruta en un juego antes de enfrentarte a un jefe. Observarás el problema desde diferentes ángulos y diseñarás un plan paso a paso para superarlo.</p>
<br><br>
    <div class="level">
      <h4>Nivel 3: Implementa y Evalúa tus Soluciones</h3>
      </div>
      <p>Llegó el momento de poner en práctica tus estrategias. Implementar un algoritmo significa escribir el código que lo ejecuta. Después, evaluarás si tu solución funciona correctamente. Es como jugar un nivel y ver si tu estrategia te lleva a la victoria.</p>
      <br><br>
      
    <p>Ahora que has comprendido los conceptos básicos de los algoritmos, estás listo para enfrentar desafíos más complejos en el mundo de la programación. ¡Continúa practicando y explorando, y pronto serás un experto en la creación de soluciones eficientes para cualquier problema!</p>
    <br><br>

    <div class="level">
      <h4>Ahora te mostraremos algunos ejemplos de algoritmos explicados de manera sencilla:</h3>
      </div>
      <ol>
    <li>
        <strong>Ejemplo 1: Algoritmo para Sumar dos Números</strong>
        <ol>
            <li>Paso 1: Inicio</li>
            <ul>
                <li>Definimos los números que queremos sumar, por ejemplo, 5 y 3.</li>
            </ul>
            <li>Paso 2: Suma</li>
            <ul>
                <li>Sumamos los dos números: 5 + 3 = 8.</li>
            </ul>
            <li>Paso 3: Fin</li>
            <ul>
                <li>Mostramos el resultado: La suma de 5 y 3 es 8.</li>
            </ul>
        </ol>
        Este algoritmo es simple pero efectivo. Simplemente toma dos números como entrada, los suma y muestra el resultado.
    </li><br>
    <li>
        <strong>Ejemplo 2: Algoritmo para Encontrar el Mayor de Tres Números</strong>
        <ol>
            <li>Paso 1: Inicio</li>
            <ul>
                <li>Definimos los tres números que queremos comparar, por ejemplo, 7, 12 y 5.</li>
            </ul>
            <li>Paso 2: Comparación</li>
            <ul>
                <li>Comparamos los números para encontrar el mayor. En este caso, 12 es el mayor.</li>
            </ul>
            <li>Paso 3: Fin</li>
            <ul>
                <li>Mostramos el resultado: El mayor de 7, 12 y 5 es 12.</li>
            </ul>
        </ol>
        Este algoritmo utiliza una serie de comparaciones para determinar cuál de los tres números es el mayor.
    </li><br>
    <li>
        <strong>Ejemplo 3: Algoritmo para Ordenar una Lista de Números</strong>
        <ol>
            <li>Paso 1: Inicio</li>
            <ul>
                <li>Definimos una lista de números desordenados, por ejemplo: 8, 3, 11, 6, 2.</li>
            </ul>
            <li>Paso 2: Ordenación</li>
            <ul>
                <li>Utilizamos un algoritmo de ordenación, como el método de burbuja o el de selección, para ordenar la lista de números en orden ascendente.</li>
            </ul>
            <li>Paso 3: Fin</li>
            <ul>
                <li>Mostramos la lista ordenada: 2, 3, 6, 8, 11.</li>
            </ul>
        </ol>
    </li><br>
</ol>

    <div class="level">
    <h4>¡Video explicativo!</h4>
    </div>
    <div class="video-container">
        <video controls autoplay loop>
            <source src="video.mp4" type="video/mp4">
            Tu navegador no admite el elemento de video.
        </video><br><br><br>
    </div>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/tema1.php" class="button">Regresar</a>
      <a href="http://localhost/IN-NET/Contenido/tema3.php" class="button">Siguiente</a><br><br>
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
