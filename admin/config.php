<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "innet";

$conexion = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conexion) {
  echo "Database connection error" . mysqli_connect_error();
}
?>