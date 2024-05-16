<!DOCTYPE html>
<html>
<head>
    <title>INICIO</title>
    <link href="http://localhost/IN-NET/CSS/index.css" rel="stylesheet"/>
    <link href="http://localhost/IN-NET/CSS/inicio.css" rel="stylesheet"/>
    <script src="http://localhost/IN-NET/Inicio/jquery-3.3.1.min.js"></script>
</head>

<body>
    <header>
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
              <li><a href="http://localhost/IN-NET/actividad/actividad.php">ACTIVIDADES</a></li>
              <li><a href="http://localhost/IN-NET/Contenido/indice.php">CONTENIDO</a><br>
              <li><a href="#">FORO</a></li>
              <li><a href="http://localhost/IN-NET/Perfil/lista.php">PERFIL</a><br>
              <li><a href="http://localhost/IN-NET/Inicio/includes/logout.php">CERRAR SESION</a></li>
            </ul>
        </nav>
        
        <section>
            <br><br>
        <h3>Bienvenidx, @<?php echo $user->getUsername();?> !</h3>
        <div class="cuadro">

        </div>
        </section>
    </header>
    
    <footer>
        <p>&copy; 2024 IN-NET</p>
    </footer>
</body>
</html>