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


$sql = "SELECT score FROM scores WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nickname);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$currentScore = $row["score"];

echo $currentScore;

$stmt->close();
$conn->close();
?>

<?php 

} else {header("Location: ../Inicio/index.php");
  exit();
} 
?>