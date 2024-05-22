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
    <h2>✧ Operaciones y operadores ✧</h2>

    <p>Ahora toca hablar de otro tema, las operaciones y operadores, en programación son herramientas fundamentales para manipular los datos y realizar cálculos dentro de un programa. Estas herramientas permiten realizar una amplia variedad de tareas, desde simples aritméticas hasta complejas manipulaciones de datos, como puedes notar esto vuelve a las operaciones y operadores un factor muy importante tener en cuenta sobre todo cuando se piensa en iniciarse en el mundo de la programación.

Llegamos ahora a la parte favorita de la explicación, la muestra de los tipos de operaciones y el cómo funcionan.

Operadores aritméticos: Estos combinan las operaciones mediante sumas, restas, etc. Las expresiones que resultan pueden combinarse con otras expresiones. Los operandos deben ser expresiones numéricas. Las expresiones no numéricas se tratan como si fueran 0's y generan un error de aviso en el tiempo de ejecución. A continuación, un ejemplo: 




-	Negación	-x
		
^	Elevación a una potencia	x ^ y
*	Multiplicación	x * y
Operadores lógicos: Los operadores lógicos son también un arma fundamental en la programación y sobre todo la lógica matemática para así evaluar condiciones y realizar operaciones booleanas. Dentro de estos se encuentran 3 variantes de operadores lógicos los cuales son:

And (o el equivalente &) Or (o el equivalente !)Not (invierte un valor lógico)
Operadores de asignación: Por último pero no menos importante, los operadores de asignación asignan valores a las variables que vayas a usar dentro de tu código, esto te otorga un número grande de posibilidades a hacer a la hora de programar, en este caso solo te mostrare 3 ejemplos que puedes usar.
=	variable =expresión	Asigna el valor de la expresión a nuestra variable.
+=	variable += expresión	Suma el valor de la expresión al valor de la variable y reasigna el resultado a la propia variable.
-=	variable - = expresión	Resta el valor de la expresión del valor de la variable y reasigna el resultado a la variable que tenemos.

</p>
    <p>Es por ello que te invitamos a que profundices y pongas a prueba tu conocimiento con IN-NET.</p>
</body>
    <br><br>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/indice.php" class="button">Regresar al indice</a>
      <a href="http://localhost/IN-NET/Contenido/tema5.php" class="button">Regresar</a><br><br>
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
