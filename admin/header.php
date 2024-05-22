<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INICIO ADMIN</title>
    <link href="../CSS/index.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../CSS/adminn.css">
</head>

<header>
<nav class="nav">
                <div class=librologo>
                <img class="libro" src="http://localhost/IN-NET/Imagenes/general/logo-r.png">
                    <div class="logo"> 
                        <a href="index.php">IN-NET</a>
                    </div> 
                </div>
            <ul class="menu">
              <li><a href="http://localhost/IN-NET/admin/home.php">ADMIN</a></li>
              <li><a href="../Inicio/index.php">USUARIO</a></li>
              <li><a href="lista.php">LISTA USUARIOS</a></li>
              <li><a href="../Inicio/includes/logout.php">CERRAR SESION</a></li>
            </ul>
        </nav>

        <section>
            <br><br>
            <h3>Bienvenidx, <?php echo $user->getNombre() . " " .$user->getApellidos();?>, al sistema de administracion de IN-NET</h3>
        </section>

</header>
<footer>
        <p>&copy; 2024 IN-NET</p>
    </footer>