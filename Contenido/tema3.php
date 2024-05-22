<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TIPOS DE DATOS</title>
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
    <h2>✧¡Conoce el Mundo de los Tipos de Datos!✧</h2>

    <p>¡Bienvenido al fascinante universo de los tipos de datos, donde aprenderás sobre los bloques de construcción esenciales de cualquier programa! Prepárate para embarcarte en un emocionante viaje donde explorarás los diferentes tipos de datos y cómo se utilizan en el mundo de la programación.</p>
    <br><br>

    <div class="level">
      <h4>Nivel 1: Explora los Tipos de Datos.</h3>
      </div>
      <p>En este emocionante viaje, aprenderás sobre los diferentes tipos de datos que puedes encontrar en la programación. Desde números hasta texto y más allá, cada tipo de dato tiene su propio propósito y utilidad en la creación de programas.</p>
      <br><br>

    <div class="level">
      <h4>Nivel 2: Arma tu Inventario con Datos Numéricos.</h3>
    </div>
      <p>Los datos numéricos son como los ladrillos de tu casa: proporcionan la base sobre la cual construir tus programas. Pueden ser enteros, como 1, 2, 3, o decimales, como 3.14. Aprenderás cómo utilizar estos datos para realizar cálculos, llevar un seguimiento de cantidades y mucho más.</p>
       <br><br>

    <div class="level">
      <h4>Nivel 3: Forja Alianzas con los Datos de Texto.</h3>
      </div>
      <p>Los datos de texto son como las palabras que hablas en una conversación. Pueden representar nombres, descripciones o cualquier otra cadena de caracteres. Descubrirás cómo trabajar con datos de texto para mostrar información a los usuarios, almacenar nombres de archivos y realizar búsquedas en texto.</p>
      <br><br>

      <div class="level">
      <h4>Nivel 4: Explora Nuevos Horizontes con los Datos Booleanos.</h3>
      </div>
      <p>Los datos booleanos son como interruptores que pueden estar encendidos (verdadero) o apagados (falso). Aprenderás cómo utilizar estos datos para tomar decisiones en tus programas, como controlar el flujo de ejecución y realizar pruebas lógicas.</p>
      <br><br>

      <div class="level">
      <h4>Nivel 5: Domina la Magia de los Datos Compuestos.</h3>
      </div>
      <p>Los datos compuestos son como contenedores que pueden almacenar múltiples valores de diferentes tipos. Aprenderás sobre estructuras de datos como listas, arreglos y diccionarios, que te permiten organizar y manipular información de manera más eficiente.</p>
      <br><br>
      

    <div class="level">
      <h4>¡Prepárate para los ejemplos de Tipos de Datos!</h3>
      </div>
      <ol>
      <ul>
        <li><strong>Datos Numéricos:</strong>
            <ul>
                <li>Entero (integer):
                    <ul>
                        <li><code>edad = 25</code></li>
                    </ul>
                </li>
                <li>Flotante (float):
                    <ul>
                        <li><code>precio = 19.99</code></li>
                    </ul>
                </li>
            </ul>
        </li><br>
        <li><strong>Datos de Texto:</strong>
            <ul>
                <li>Cadena de Caracteres (string):
                    <ul>
                        <li><code>nombre = "Juan"</code></li>
                    </ul>
                </li>
            </ul>
        </li><br>
        <li><strong>Datos Booleanos:</strong>
            <ul>
                <li>Booleano (boolean):
                    <ul>
                        <li><code>activo = True</code></li>
                    </ul>
                </li>
            </ul>
        </li><br>
        <li><strong>Datos Compuestos:</strong>
            <ul>
                <li>Lista (list):
                    <ul>
                        <li><code>nombres = ["Juan", "María", "Pedro"]</code></li>
                    </ul>
                </li>
                <li>Tupla (tuple):
                    <ul>
                        <li><code>coordenadas = (10, 20)</code></li>
                    </ul>
                </li>
                <li>Diccionario (dictionary):
                    <ul>
                        <li><code>persona = {"nombre": "Juan", "edad": 25}</code></li>
                    </ul>
                </li>
                <li>Conjunto (set):
                    <ul>
                        <li><code>colores = {"rojo", "verde", "azul"}</code></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul><br>
</ol>

<div class="level">
      <h4>Los tipos de datos y las variables están conectados, pero no son lo mismo.</h3>
      </div><br>
    <p><strong>Variables:</strong> Las variables son como cajas donde guardas cosas en la memoria de tu programa. Pueden contener diferentes tipos de datos.</p><br>
    <p><strong>Tipos de datos:</strong> Los tipos de datos definen qué tipo de cosas puedes guardar en esas cajas. Por ejemplo, números, texto o booleanos.</p><br>
    <p>En resumen, las variables son los contenedores y los tipos de datos son los diferentes tipos de cosas que pueden contener.</p><br>

    <div class="level">
    <h4>¡Video explicativo!</h4><br><br>
    </div>
    <div class="video-container">
    <a href="http://localhost/IN-NET/Contenido/Script/tema3.php" class="button">Ver Script</a>
        <video controls>
            <source src="http://localhost/IN-NET/Contenido/Videos/tema3.mp4" type="video/mp4">
            Tu navegador no admite el elemento de video.
        </video><br><br><br><br>
    </div>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/tema2.php" class="button">Regresar</a>
      <a href="http://localhost/IN-NET/Contenido/tema4.php" class="button">Siguiente</a><br><br>
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
