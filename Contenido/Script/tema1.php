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
    include_once '../../Inicio/includes/user.php';
    include_once '../../Inicio/includes/user_session.php';
    include_once '../../Inicio/Includes/conexion.php';
    
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
    <h2>✧ ¿Alguna vez has escuchado o leído sobre la programación? ✧</h2>

    <p>¿Listo para sumergirte en el emocionante mundo de la programación? ¡Prepárate para nivelar tus habilidades y convertirte en el maestro del código! Pero espera, ¿qué es realmente la programación?</p>
                <br><br>
      <p>Te explico, la programación es la creación de instrucciones para realizar tareas específicas en una computadora, mejor llamado como código, que es el lenguaje que permite que nuestras instrucciones sean realizadas por la máquina.</p>

    <h2>Algunos de sus componentes básicos son:</h2>
    <p><strong>✧ Lenguajes de programación</strong>: permiten al programador y a la computadora interactuar. Algunos de los más conocidos son Python, Java, C, entre otros. Ten en cuenta que cada lenguaje tiene distinta sintaxis y reglas, descubre cuál es el que mejor se adapta a ti.</p>
    <p><strong>✧ Algoritmos</strong>: son series de pasos lógicos ordenados que describen cómo se debe realizar alguna tarea específica. Estos se deben adaptar al código para que se puedan implementar, pero más adelante te explicaremos un poco más al respecto.</p>
    <p><strong>✧ Compiladores y entornos de desarrollo</strong>: los compiladores son los encargados de traducir nuestro código para que se logre ejecutar directamente. Por otro lado, los entornos de desarrollo son los ambientes en los que el programador puede trabajar, utilizando distintas herramientas tales como editor de código, compiladores, depuradores, entre otros. Algunos de los más conocidos son Visual Studio Code, PyCharm, Eclipse, entre otros.</p><br><br>

    <p>Para poder entender un poco más de cómo funciona la programación debemos tener en cuenta que tiene procesos importantes, tales como identificar cuál es la problemática a resolver, cómo será el diseño para ejecutar la solución, ya sea creando algoritmos y la estructura en general, codificar en el lenguaje de nuestra selección, hacer las respectivas pruebas y darle su respectivo mantenimiento.</p>

    <p>Es por ello que te invitamos a que profundices y pongas a prueba tu conocimiento con IN-NET.</p>
</body>
    <br><br>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/indice.php" class="button">Regresar al indice</a>
      <a href="http://localhost/IN-NET/Contenido/tema1.php" class="button">Regresar</a><br><br>
    </div>
    </div>
   

  <footer>
        <p>&copy; 2024 IN-NET</p>
    </footer>
</html>
<?php 

} else {header("Location: ../../Inicio/index.php");
  exit();
} 
?>
</html>
