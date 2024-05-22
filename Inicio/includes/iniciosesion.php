<!DOCTYPE html>
<html>
<head>
    <link href="../CSS/index.css" rel="stylesheet"/>
    <link href="../CSS/formularie.css" rel="stylesheet"/>
    <title>INICIO DE SESION</title>
</head>
<body>
    <nav class="nav">
                <div class=librologo>
                <img class="libro" src="http://localhost/IN-NET/Imagenes/general/logo-r.png">
                    <div class="logo"> 
                        <a href="index.php">IN-NET</a>
                    </div> 
                </div>

                <ul class="menu">
                    <li><a href="../index.php">PAGINA PRINCIPAL</a></li>
                </ul>
    </nav>

       

    <div class="contenedor">
        <form class="form" action="" method="POST">
            <h2>Iniciar Sesión</h2><br>
            <?php
            if(isset($errorLogin)){
                echo '<div style="color: red; font-size: 11px; margin-bottom: 15px;">' . $errorLogin . '</div>';
            }
        ?>
            <img class="imgform" src="http://localhost/IN-NET/Imagenes/formularios/user.png"><br><br><br>
            <input type="text" name="username" required placeholder="Ingresa tu usuario"><br><br>
            <input type="password" name="password" required placeholder="Ingresa tu contraseña"><br><br>
            <input type="submit" value="Ingresar"><br><br>

            <a href="../Registro/registro.php">✧ ¿Aún no tienes una cuenta? Registrate aquí ✧</a>

        </form>
    </div>

    <footer>
        <p>&copy; 2024 IN-NET</p>
    </footer>
    
</body>