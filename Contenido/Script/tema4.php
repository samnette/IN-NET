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
    <h2>✧ Las variables ✧</h2>
    
    <p>Ahora que tienes en claro que son los tipos de datos, sus variantes y el cómo funcionan es momento de dar el siguiente paso en el saber de la programación ¿Cuál es? Las variables. 

Las variables son un pilar fundamental dentro de la programación, sin ellas no podrías avanzar en tu entorno/código. La comprensión de las variables es casi tan importante como la comprensión del propio código, esto debido a que se necesitan las variables para poder manipular de manera eficiente los datos de un código, así como mantenerlo limpio y legible.

Una vez se domina el uso de las variables y sus aplicaciones, tu como programador podrás escribir programas muchísimo más complejos y eficientes a la hora de complacer aquello que quieres crear. A continuación, de la misma manera que en los tipos de datos voy a enseñarte 3 variables importantes dentro de la programación.

Variables numéricas: Estas almacenan valores numéricos, sin importar si son enteros o si son decimales, por ejemplo, PRECIO: 7,757 o EDAD: 21.

Variables de texto: Las variables de texto almacenan cadenas de caracteres comos serian; NOMBRE: Pepito Espadas o MENSAJE: “ Como que 35° a la sombra en tonalá” 
Variables booleanas: Como en los tipos de datos, se encargan de almacenar valores verdaderos, como por ejemplo un; ACTIVO = True o VALIDO = False.

</p>
    <p>Es por ello que te invitamos a que profundices y pongas a prueba tu conocimiento con IN-NET.</p>
</body>
    <br><br>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/indice.php" class="button">Regresar al indice</a>
      <a href="http://localhost/IN-NET/Contenido/tema4.php" class="button">Regresar</a><br><br>
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
