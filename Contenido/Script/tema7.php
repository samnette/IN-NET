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
    <h2>✧ Estructuras de datos y control ✧</h2>

    <p>Las estructuras de datos organizan nuestra información y las estructuras de control guían el flujo de nuestras acciones. Ambas son esenciales para construir programas eficientes y efectivos.

Las estructuras de datos son formas organizadas de almacenar y gestionar la información para que podamos utilizarla de manera eficiente. Imagina una caja de herramientas donde cada compartimento guarda un tipo diferente de herramienta. Cada herramienta tiene su lugar y propósito. Entre las estructuras de datos más comunes encontramos:
•	Arreglos (o vectores): Son como una fila de casilleros, donde cada casillero puede guardar un valor. Puedes acceder a cada casillero por su número.
•	Listas enlazadas: Piensa en una cadena de papel, donde cada eslabón está conectado al siguiente. Cada eslabón contiene un valor y un enlace al siguiente eslabón.
•	Pilas: Son como una pila de platos. Solo puedes acceder al plato de arriba y, cuando sacas uno, el siguiente está disponible. Funcionan con el principio de "último en entrar, primero en salir".
•	Colas: Imagina una fila en un supermercado. El primero en entrar es el primero en salir. Es el principio de "primero en entrar, primero en salir".
•	Árboles: Son como un árbol genealógico. Empiezas en la raíz y se ramifica en varios hijos, que a su vez pueden tener más hijos.
•	Grafos: Piensa en un mapa de ciudades conectadas por carreteras. Cada ciudad es un nodo y cada carretera es una conexión entre nodos.

Las estructuras de control son las reglas que seguimos para tomar decisiones y repetir acciones en un programa. Son como las señales de tráfico en la programación, que nos dicen cuándo avanzar, detenernos o repetir una acción. Entre las estructuras de control más comunes están:
•	Condicionales (if, else): Como los semáforos. Si la luz está verde, avanzas; si está roja, te detienes. Permiten tomar decisiones basadas en condiciones.
•	Bucles (for, while): Son como repetir un ejercicio hasta que lo hagas bien. Los bucles for se usan cuando sabes cuántas veces quieres repetir algo, y los while cuando quieres repetir algo hasta que se cumpla una condición.
•	Switch: Imagina un interruptor de múltiples posiciones. Dependiendo de la posición en que esté, ejecutará una acción diferente. Se utiliza para manejar múltiples condiciones.
•	Break y continue: En un juego de mesa, "break" sería como decidir terminar el juego antes de lo previsto, y "continue" sería como saltar tu turno y dejar que el siguiente jugador siga.
En resumen, las estructuras de datos y de control son fundamentales en la programación. Las primeras nos permiten organizar y manejar la información eficientemente, mientras que las segundas nos guían en la toma de decisiones y la repetición de acciones. Juntas, forman la base para crear programas sólidos y funcionales.

</p>
    <p>Es por ello que te invitamos a que profundices y pongas a prueba tu conocimiento con IN-NET.</p>
</body>
    <br><br>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/indice.php" class="button">Regresar al indice</a>
      <a href="http://localhost/IN-NET/Contenido/tema7.php" class="button">Regresar</a><br><br>
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
