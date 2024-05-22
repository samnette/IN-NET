<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FUNCIONES</title>
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
    <h2>✧¡Funciones funcionales!✧</h2>

    <p>Bienvenido a un emocionante viaje donde explorarás el fascinante mundo de las funciones, las herramientas esenciales que te permiten organizar y reutilizar tu código de manera efectiva. En este viaje educativo, aprenderás cómo las funciones pueden simplificar tus programas y aumentar tu eficiencia como desarrollador.</p>
    <br><br>

    <div class="level">
      <h4>Nivel 1: Entendiendo el Concepto de Funciones.</h4>
      </div>
      <p>Las funciones son como recetas en un libro de cocina: te permiten definir un conjunto de instrucciones que puedes ejecutar cuando las necesites. Aprenderás cómo definir funciones, proporcionarles entradas (argumentos) y obtener salidas (valores de retorno).
Las funciones son bloques de código que realizan una tarea específica cuando son llamadas. Son como pequeñas máquinas que aceptan entradas, realizan algún procesamiento y devuelven resultados.
Por ejemplo, podrías tener una función llamada calcular_promedio() que toma una lista de números como entrada y devuelve su promedio.

</p><br><br>

    <div class="level">
      <h4>Nivel 2: Explorando las Funciones Integradas.</h4>
    </div>
      <p>En tu viaje, descubrirás una amplia gama de funciones integradas en tu lenguaje de programación, diseñadas para realizar tareas comunes. Desde funciones matemáticas hasta funciones para manipular texto, aprenderás cómo aprovechar estas herramientas para resolver problemas de manera eficiente.
Los lenguajes de programación proporcionan una serie de funciones integradas que puedes utilizar sin necesidad de definirlas. Estas funciones abarcan una amplia gama de tareas, desde operaciones matemáticas hasta manipulación de cadenas y entrada/salida.
Por ejemplo, en Python, la función len() te da la longitud de una lista, y la función print() te permite mostrar mensajes en la pantalla.
</p><br><br>

    <div class="level">
      <h4>Nivel 3: Creando tus Propias Funciones Personalizadas.</h4>
      </div>
      <p>Pero la verdadera magia comienza cuando creas tus propias funciones personalizadas. Aprenderás cómo encapsular bloques de código en funciones reutilizables que puedes llamar una y otra vez en diferentes partes de tu programa. Esto te permitirá escribir código más limpio y modular.
Una de las principales ventajas de la programación es la capacidad de definir tus propias funciones. Esto te permite modularizar tu código y hacerlo más legible y fácil de mantener.
Para crear una función, especificas un nombre, una lista de parámetros y un bloque de código que se ejecutará cuando la función sea llamada.
Por ejemplo, podrías definir una función llamada saludar(nombre) que imprima un mensaje de saludo personalizado para un nombre dado.
</p><br><br>
      
<div class="level">
      <h4>Nivel 4: Explorando Funciones Especiales como las Recursivas.</h4>
      </div>
      <p>Además, descubrirás funciones especiales como las funciones recursivas, que se llaman a sí mismas para resolver problemas de manera elegante. Aprenderás cómo utilizar la recursión para abordar problemas complejos dividiéndolos en casos más simples.
Algunas funciones tienen características especiales que las hacen únicas. Por ejemplo, las funciones recursivas son aquellas que se llaman a sí mismas dentro de su propio cuerpo.
La recursión es útil para resolver problemas que pueden dividirse en casos más pequeños del mismo tipo, como el cálculo de factoriales o la búsqueda en árboles.
</p><br><br>


    <div class="level">
      <h4>¡Te mostramos algunos ejemplos!</h3>
      </div>
      <ol>
      <ul>
        <li><strong>Función para Calcular el Promedio:</strong>
            <ul>
                <li><code>def calcular_promedio(lista):<br>
                    &nbsp;&nbsp;suma = sum(lista)<br>
                    &nbsp;&nbsp;promedio = suma / len(lista)<br>
                    &nbsp;&nbsp;return promedio</code></li>
                <li><code># Uso de la función<br>
                    numeros = [10, 20, 30, 40, 50]<br>
                    resultado = calcular_promedio(numeros)<br>
                    print("El promedio es:", resultado)</code></li>
            </ul><br>
        </li>
        <li><strong>Función para Saludar:</strong>
            <ul>
                <li><code>def saludar(nombre):<br>
                    &nbsp;&nbsp;mensaje = "¡Hola, " + nombre + "! ¿Cómo estás?"<br>
                    &nbsp;&nbsp;return mensaje</code></li>
                <li><code># Uso de la función<br>
                    nombre = "Juan"<br>
                    saludo = saludar(nombre)<br>
                    print(saludo)</code></li>
            </ul><br>
        </li>
        <li><strong>Función para Verificar si un Número es Par:</strong>
            <ul>
                <li><code>def es_par(numero):<br>
                    &nbsp;&nbsp;if numero % 2 == 0:<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;return True<br>
                    &nbsp;&nbsp;else:<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;return False</code></li>
                <li><code># Uso de la función<br>
                    num = 10<br>
                    if es_par(num):<br>
                    &nbsp;&nbsp;print(num, "es un número par.")<br>
                    else:<br>
                    &nbsp;&nbsp;print(num, "no es un número par.")</code></li>
            </ul><br>
        </li>
    </ul><br>
</ol>
<br>

    <div class="level">
    <h4>¡Video explicativo!</h4>
    </div>
    <div class="level">
    <h4>¡Video explicativo!</h4><br><br>
    </div>
    <div class="video-container">
    <a href="http://localhost/IN-NET/Contenido/Script/tema6.php" class="button">Ver Script</a>
        <video controls>
            <source src="http://localhost/IN-NET/Contenido/Videos/tema6.mp4" type="video/mp4">
            Tu navegador no admite el elemento de video.
        </video><br><br><br><br>
    </div>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/tema5.php" class="button">Regresar</a>
      <a href="http://localhost/IN-NET/Contenido/tema7.php" class="button">Siguiente</a><br><br>
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
