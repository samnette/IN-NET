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
    <h2>✧ Funciones ✧</h2>
    <p>¿Sabes que es lo que realizan las funciones dentro del mundo de la programación?
Son herramientas esenciales que te permiten organizar y reutilizar tu código de manera efectiva.
Entonces tengamos en claro sus partes: definirla, el contenido, y su llamada.
Definir una función es establecer el nombre que tendrá y si se requiere, los parámetros y argumentos, estos son variables y valores que se utilizaran. Luego tenemos el cuerpo de la función que es el que contiene todas las instrucciones que realizara al ser requerida, y por ultimo para llamar a la función solo debemos invocar con el nombre previamente establecido en la parte del código para que se realice la función. 
Un ejemplo sencillo implementado con python seria:
• Función para Saludar: 
def saludar(nombre): 
mensaje = "¡Hola, " + nombre + "! ¿Cómo estás?" 
return mensaje 

Definimos el nombre que es “Saludar”, y “nombre” es el parametro de entrada.
El cuerpo de la funcion contiene “mensaje”, el cual es una variable que contiene el texto "¡Hola, " + nombre + "! ¿Cómo estás?", donde el nombre es el parametro previamente establecido.
Por ultimo tenemos el return que es el encargado de devolver la variable anterior cuando sea invocada la funcion.

# Uso de la función 
nombre = "Juan" 
saludo = saludar(nombre) 
print(saludo) 

Ahora para llamar a la funcion, tenemos que nuestra variable nombre tiene asignada el texto de “Juan”, luego tenemos la llamada a nuestra funcion con el argumento de nombre, lo que hara que se almacene en la funcion, y por ultimo tenemos una impresion del resultado, el cual daria como resultado ¡Hola, Juan! ¿Cómo estás?

Ahora que sabes cual es la utilidad de las funciones, podras encontrar de diferentes tipos, tales como funciones integradas, personalizadas, y recursivas, el limite es tu imaginacion y el como las manipules.

</p>
    <p>Es por ello que te invitamos a que profundices y pongas a prueba tu conocimiento con IN-NET.</p>
</body>
    <br><br>
    <div class="botones">
      <a href="http://localhost/IN-NET/Contenido/indice.php" class="button">Regresar al indice</a>
      <a href="http://localhost/IN-NET/Contenido/tema6.php" class="button">Regresar</a><br><br>
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
