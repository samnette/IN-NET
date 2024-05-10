<?php

include_once '../Inicio/includes/user.php';
include_once '../Inicio/includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){

    $user->setUser($userSession->getCurrentUser());
}else{
  
    include_once 'home.php';
}


?>
<style>
  form {
    text-align: center;
  }
  .question {
    font-size: 1.5em;
    margin-bottom: 1em;
  }
  .answers {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1em;
  }
  .answer {
    width: 45%;
    padding: 0.5em;
    border-radius: 5px;
  }
  .answer:nth-child(1) {
    background-color: #add8e6;
  }
  .answer:nth-child(2) {
    background-color: #f08080;
  }
  .answer:nth-child(3) {
    background-color: #f0e68c;
  }
  .answer:nth-child(4) {
    background-color: #90ee90;
  }
</style>
<!DOCTYPE html>
<html>
<head>
    <title>INICIO</title>
    <link href="http://localhost/IN-NET/CSS/index.css" rel="stylesheet"/>
    <link href="http://localhost/IN-NET/CSS/Inicio.css" rel="stylesheet"/>
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
              <li><a href="#">ACTIVIDADES</a></li>
              <li><a href="#">FORO</a></li>
              <li><a href="http://localhost/IN-NET/Perfil/lista.php">PERFIL</a><br>
              <li><a href="http://localhost/IN-NET/Inicio/includes/logout.php">CERRAR SESION</a></li>
            </ul>
        </nav>
        
        <section>
            <br><br>
        <div class="cuadro">
        <form method="post" action="verificar.php">
  <?php 
  include 'data.php';
  ?>
  <p class="question"><?php echo $question; ?></p>
  <div class="answers">
    <?php foreach ($answers as $index => $answer): ?>
    <label class="answer">
      <input type="radio" id="respuesta" name="respuesta" value="<?php echo $answer['id']; ?>">
      <?php echo $answer['respuesta']; ?>
    </label>
    <?php endforeach; ?>
  </div>
  <input type="submit" value="Enviar respuesta">
</form>
        </div>
        </section>
    </header>

    <footer>
        <p>&copy; 2024 IN-NET</p>
    </footer>
</body>
</html>

