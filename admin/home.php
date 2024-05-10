<?php 
    include_once '../Inicio/includes/user.php';
    include_once '../Inicio/includes/user_session.php';
    
    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    $si = $user->getAdmin();
    if ($si == 0) {
        header("Location: ../Inicio/index.php");  
    }
?>
<html>

<body>
    <?php include "header.php"?>
</body>
</html>

<?php 
} else {header("Location: ../Inicio/index.php");
  exit();
} 
?>