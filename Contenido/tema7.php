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
    <h2>✧¡Aprende operaciones y operadores!✧</h2>

    <p>¡Prepárate para una aventura donde dominarás las estructuras de datos y las estructuras de control, elementos esenciales que te ayudarán a construir tus programas con la eficiencia y poder dignos de un verdadero gamer!</p>
    <br><br>

    <div class="level">
      <h4>Nivel 1: Explorando las Estructuras de Datos.</h4>
      </div>
      <p>Las estructuras de datos son como los arsenales en tu videojuego favorito: te permiten almacenar, organizar y gestionar tu información de manera eficiente. Vamos a descubrir algunas de las más importantes.</p>
      <br><br>
      <li><strong>Listas:</strong>
    <ul>
        <p>Las listas son como tus inventarios en los juegos. Puedes guardar y organizar elementos en un orden específico.</p><br>
            <ul>
                <li># Crear una lista</strong><br><code>inventario = ["espada", "escudo", "poción"]</code></li>
                <br>
                <li># Acceder a elementos</strong><br><code>primera_arma = inventario[0]<br>print(primera_arma)  # Salida: espada</code></li>
                <br>
                <li># Agregar elementos</strong><br><code>inventario.append("arco")<br>print(inventario)  # Salida: ['espada', 'escudo', 'poción', 'arco']</code></li>
                <br>
            </ul>
        </li>
    </ul><br>
    
    <strong>Diccionarios:</strong>
    <ul>
        <p>Los diccionarios son como tus bases de datos de personajes. Puedes asociar claves con valores, perfecto para almacenar atributos.</p><br>
            <ul>
                <li># Crear un diccionario<br><code>personaje = {<br>&nbsp;&nbsp;&nbsp;&nbsp;"nombre": "Arthur",<br>&nbsp;&nbsp;&nbsp;&nbsp;"clase": "guerrero",<br>&nbsp;&nbsp;&nbsp;&nbsp;"nivel": 20<br>}</code></li>
                <br>
                <li># Acceder a valores<br><code>nombre_personaje = personaje["nombre"]<br>print(nombre_personaje)  # Salida: Arthur</code></li>
                <br>
                <li># Agregar nuevos pares clave-valor<br><code>personaje["arma"] = "espada"<br>print(personaje)  # Salida: {'nombre': 'Arthur', 'clase': 'guerrero', 'nivel': 20, 'arma': 'espada'}</code></li>
                <br>
            </ul>
        </li>
    </ul><br>
    <strong>Conjuntos:</strong>
    <ul>
        <p>Los conjuntos son como los logros desbloqueados. No permiten duplicados y te ayudan a gestionar colecciones únicas.</p><br>
            <ul>
                <li># Crear un conjunto<br><code>logros = {"primera_misión", "derrotar_jefe", "recolector_de_tesoros"}</code></li>
                <br>
                <li># Agregar elementos<br><code>logros.add("maestro_de_mazmorras")<br>print(logros)  # Salida: {'primera_misión', 'derrotar_jefe', 'recolector_de_tesoros', 'maestro_de_mazmorras'}</code></li>
                <br>
            </ul>
        </li>
    </ul>
    </li>
      <br><br>

    <div class="level">
      <h4>Nivel 2: Dominando las Estructuras de Control.</h4>
    </div>
      <p>Las estructuras de control son como las misiones en tu juego: te guían y deciden el flujo de tu aventura. Vamos a explorarlas.</p>
      <br><br>

      <li><strong>Condicionales:</strong>
    <ul>
        <p>Los condicionales son como las decisiones en tu juego. Te permiten elegir diferentes caminos basados en condiciones.</p><br>
            <ul>
                <li># Condicional simple<br><code>vida = 50<br>if vida > 0:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("¡El personaje está vivo!")<br>else:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("¡El personaje ha caído!")</code></li><br>
            </ul>
        </li>
    </ul><br>
    <strong>Bucles:</strong>
    <ul>
        <p>Los bucles son como las batallas repetitivas en un juego. Te permiten ejecutar código varias veces.</p><br>
            <ul>
                <li># Bucle for<br><code>for item in inventario:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Tienes:", item)</code></li><br>
                <li># Bucle while<br><code>mana = 100<br>while mana > 0:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Lanzando hechizo... Mana restante:", mana)<br>&nbsp;&nbsp;&nbsp;&nbsp;mana -= 10</code></li><br>
            </ul>
        </li>
    </ul><br>
    <strong>Bucles Anidados:</strong>
    <ul>
        <p>Los bucles anidados son como explorar múltiples niveles en un calabozo.</p><br>
            <ul>
                <li># Bucle anidado<br><code>for enemigo in ["goblin", "orco", "dragón"]:<br>&nbsp;&nbsp;&nbsp;&nbsp;for ataque in ["golpe", "patada", "hechizo"]:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(f"Atacando al {enemigo} con un {ataque}")</code></li>
            </ul>
        </li>
    </ul>

    <div class="level">
      <h4>Nivel 3: Combinando Poderes para la Victoria.</h4>
      </div>
      <li><strong>Funciones con Estructuras de Datos y Control:</strong>
    <ul>
        <p>Las funciones son tus habilidades especiales. Combinarlas con estructuras de datos y control te da una ventaja increíble.</p><br>
            <ul>
                <li><code>def gestionar_inventario(inventario):<br>&nbsp;&nbsp;&nbsp;&nbsp;for item in inventario:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("Tienes:", item)</code></li><br>
                <li><code>def verificar_estado(vida):<br>&nbsp;&nbsp;&nbsp;&nbsp;if vida > 0:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "¡El personaje está vivo!"<br>&nbsp;&nbsp;&nbsp;&nbsp;else:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "¡El personaje ha caído!"</code></li><br>
                <li># Usar las funciones</strong><br><code>gestionar_inventario(inventario)<br>estado = verificar_estado(vida)<br>print(estado)</code></li><br>
            </ul>
        </li>
    </ul>
      

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
      <a href="http://localhost/IN-NET/Contenido/tema6.php" class="button">Regresar</a>
      <a href="http://localhost/IN-NET/Contenido/indice.php" class="button">Indice</a><br><br>
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
