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
    <h2>✧ ¿Conoces los distintos tipos de datos que existen en el mundo de la programación? ✧</h2>

    <p>Espero que no porque para eso te lo voy a explicar, los “tipos de datos” hacen referencia a que tipo de herramienta  usaremos para completar nuestra misión de programación y al igual que en el mundo real existen por ejemplo los martillos, las llaves inglesas, etcétera; en la programación dichos datos cuentan con una gran variedad de usos, te daré una breve explicación de los más importantes y te diré las diferencias entre ellos ya sea  por ejemplo si son números, cadenas de caracteres, booleanos o incluso sin valor alguno.

¿Cuáles son los tipos de datos más comunes? 

Como ya lo mencioné anteriormente, los más comunes y más usados son: numéricos ,cadenas de caracteres, booleanos o sin valor. empezaremos por el principio porque si empezamos por el final no me vas a entender.

Numéricos
 Los datos numéricos como su nombre indica representan todos los datos que contengan o hagan uso de un valor numérico, a su vez, estos datos numéricos se pueden subdividir.

Integer: Son números sin decimales, como serían el 5, 7 y 12. 
Float: Estos son números que si contienen decimales, podrían ser 77.7, 5.5 o 12.3.
Double: Números con decimales, esta es similar a los floats pero con la diferencia de es capaz de almacenar muchos más decimales, este tipo de datos se utiliza sobre todo cuando se busca ser extremadamente preciso con el resultado por ejemplo en el número PI que contiene un montón de decimales.

Cadenas de caracteres:
Las cadenas de caracteres sirven para almacenar texto (algunas veces números u otros tipos de símbolos) dentro de las cadenas de caracteres tenemos 2 tipos.

Char: Los Char son solamente un carácter, ya sea un número, una letra o un símbolo, por ejemplo un #, @, 5, 7, P, N. 
String: Un string es igual solamente que sin la restricción de un carácter, debido a eso en un string puedes poner una frase, por ejemplo “Flash > cualquier superhéroe”
 
Boolean:
Los datos booleanos sirven para especificar si algo es verdadero o falso, siendo así un dato que solo puede ser mostrado como (True) o (False).

Sin  valor o de valor indefinido.
El nombre de este tipo de dato, ya es lo bastante explicativo por sí solo, sirven para identificar cuando un dato tiene un valor indefinido o un valor nulo, se representan de esa misma manera (Null) o (Undefined).
</p>
                <br><br>
      

    <p>Es por ello que te invitamos a que profundices y pongas a prueba tu conocimiento con IN-NET.</p>
</body>
    <br><br>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/indice.php" class="button">Regresar al indice</a>
      <a href="http://localhost/IN-NET/Contenido/tema3.php" class="button">Regresar</a><br><br>
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
