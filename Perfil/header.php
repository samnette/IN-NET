<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PERFIL</title>
  <link href="http://localhost/IN-NET/CSS/index.css" rel="stylesheet"/>
  <link href="http://localhost/IN-NET/CSS/perfill.css" rel="stylesheet"/>
  
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
              <li><a href="#">FORO</a></li>
              <li><a href="http://localhost/IN-NET/Perfil/lista.php">PERFIL</a><br>
              <li><a href="http://localhost/IN-NET/Ranking/verranking.php">RANKING</a></li>
              <li><a href="http://localhost/IN-NET/Inicio/includes/logout.php">CERRAR SESION</a></li>
            </ul>
        </nav>
    </body>

</head>

