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
              <li><a href="https://discord.gg/H8rsHTrh">FORO</a></li>
              <li><a href="http://localhost/IN-NET/Perfil/lista.php">PERFIL</a><br>
              <li><a href="http://localhost/IN-NET/Ranking/verranking.php">RANKING</a></li>
              <li><a href="http://localhost/IN-NET/Inicio/includes/logout.php">CERRAR SESION</a></li>
            </ul>
        </nav>
        
        <div class="container2">
    <h2>✧ ¡Apuesto a que sabes los pasos que debes realizar en ciertas acciones, pues los algoritmos son muy similares! ✧</h2>

    <p>Un algoritmo es una secuencia de pasos bien definidos para poder resolver problemáticas; es el cómo se debe aplicar e implementar en la programación para que logre ser ejecutado.
Lo que los caracteriza es que están bien definidos, conteniendo las entradas y salidas de los datos, además de que son finitos, debe contar con una eficiencia, de preferencia barata (en recursos y tiempo).
Existen distintos algoritmos con distintos usos, por ejemplo:
Algoritmos de búsqueda, para encontrar elementos; algoritmos de ordenamiento, para organizar los elementos en las estructuras; algoritmos de dividir y vencer, que dividen los problemas, etcétera.
Para ello existen distintas estrategias, pero debes tener muy en claro cuál es tu objetivo por resolver, así que debes saber cuál se debe aplicar en cada ocasión, eso es lo divertido.

Por ejemplo, explicaremos este algoritmo sencillo.

Paso 1: Inicio - Definimos los números que queremos sumar, por ejemplo, 5 y 3. 
Paso 2: Suma - Sumamos los dos números: 5 + 3 = 8. 
Paso 3: Fin - Mostramos el resultado: La suma de 5 y 3 es 8.

Los algoritmos son muy importantes y necesarios en el mundo de la programación, así que comienza creando tus series de pasos específicos y lograras llegar a muchas soluciones.
</p>
                <br><br>

    <p>Es por ello que te invitamos a que profundices y pongas a prueba tu conocimiento con IN-NET.</p>
</body>
    <br><br>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/indice.php" class="button">Regresar al indice</a>
      <a href="http://localhost/IN-NET/Contenido/tema2.php" class="button">Regresar</a><br><br>
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
