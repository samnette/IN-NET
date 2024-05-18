<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VARIABLES</title>
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
    <h2>✧¡Conoce el Mundo de las Variables!✧</h2>

    <p>¡Bienvenido a una emocionante travesía a través del fascinante mundo de las variables en la programación! En este viaje, descubrirás cómo las variables son las herramientas fundamentales que te permiten almacenar y manipular información en tus programas.</p>
    <br><br>

    <div class="level">
      <h4>Nivel 1:  Descubriendo el Poder de las Variables.</h3>
      </div>
      <p>Las variables son como contenedores que puedes utilizar para almacenar diferentes tipos de datos, como números, texto o valores booleanos. Son esenciales en la programación porque te permiten guardar información y utilizarla en tu código.</p>
      <br><br>

    <div class="level">
      <h4>Nivel 2:  Explorando las Variables Numéricas.</h3>
    </div>
      <p>Las variables numéricas son utilizadas para representar números en tus programas. Por ejemplo, puedes usar una variable numérica para guardar la edad de un usuario o el puntaje obtenido en un juego. Esto te permite realizar cálculos y tomar decisiones basadas en estos números.</p>
      <br><br>

    <div class="level">
      <h4>Nivel 3: Entendiendo las Variables de Texto.</h3>
      </div>
      <p>Las variables de texto te permiten almacenar cadenas de caracteres, como nombres o mensajes. Puedes utilizar una variable de texto para guardar el nombre de un usuario o mostrar un mensaje en la pantalla. Esto te da la flexibilidad de trabajar con datos de texto en tus programas.</p>
      <br><br>

      <div class="level">
      <h4>Nivel 4: Controlando el Flujo con Variables Booleanas.</h3>
      </div>
      <p>Las variables booleanas son utilizadas para representar valores de verdadero o falso. Son especialmente útiles para tomar decisiones en tus programas. Por ejemplo, puedes usar una variable booleana para determinar si un usuario ha completado una tarea o si un objeto está activo en el juego.</p>
      <br><br>

      <div class="level">
      <h4>Nivel 5: Utilizando Variables Compuestas.</h3>
      </div>
      <p>Las variables compuestas te permiten agrupar varios valores en una sola entidad. Esto puede ser útil para organizar información relacionada. Por ejemplo, puedes usar una lista para almacenar una colección de nombres o un diccionario para asociar claves y valores.</p>
      <br><br>
      

    <div class="level">
      <h4>¡Prepárate para los ejemplos de Variables!</h3>
      </div>
      <ol>
      <ul>
        <li><strong>Variables Numéricas:</strong>
            <ul>
                <li><code>edad = 73</code></li>
                <li><code>puntaje = 1700</code></li>
            </ul>
        </li>
        <li><strong>Variables de Texto:</strong>
            <ul>
                <li><code>nombre = "Juan"</code></li>
                <li><code>mensaje = "Hola, mundo!"</code></li>
            </ul>
        </li>
        <li><strong>Variables Booleanas:</strong>
            <ul>
                <li><code>activo = True</code></li>
                <li><code>completado = False</code></li>
            </ul>
        </li>
        <li><strong>Variables Compuestas:</strong>
            <ul>
                <li>Lista de nombres: <code>nombres = ["Miku", "Len", "Kaito"]</code></li>
                <li>Diccionario de información de una persona: <code>persona = {"nombre": "Miku", "edad": 16, "ciudad": "Tokyo"}</code></li>
            </ul>
        </li>
    </ul><br>
</ol>
<br><br>
<div class="level">
      <h4>Los tipos de datos y las variables están conectados, pero no son lo mismo.</h3>
      </div><br>
    <p><strong>Variables:</strong> Las variables son como cajas donde guardas cosas en la memoria de tu programa. Pueden contener diferentes tipos de datos.</p><br>
    <p><strong>Tipos de datos:</strong> Los tipos de datos definen qué tipo de cosas puedes guardar en esas cajas. Por ejemplo, números, texto o booleanos.</p><br>
    <p>En resumen, las variables son los contenedores y los tipos de datos son los diferentes tipos de cosas que pueden contener.</p><br>

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
      <a href="http://localhost/IN-NET/Contenido/tema3.php" class="button">Regresar</a>
      <a href="http://localhost/IN-NET/Contenido/tema5.php" class="button">Siguiente</a><br><br>
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
