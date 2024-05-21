<?php 
    include_once '../Inicio/includes/user.php';
    include_once '../Inicio/includes/user_session.php';
    
    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    $nickname = $user->getusername();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "innet";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$score = $_POST["score"];

$sql = "INSERT INTO scores (username, score) VALUES (?, ?) ON DUPLICATE KEY UPDATE score = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $nickname, $score, $score);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Score saved successfully";
} else {
    echo "No changes made to the score";
}

$stmt->close();
$conn->close();
?>

<?php 
} else {header("Location: ../Inicio/index.php");
  exit();
} 
?>