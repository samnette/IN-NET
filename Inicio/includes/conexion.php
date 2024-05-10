<?php
    $host = 'localhost';
    $bd = 'innet';
    $user = 'root';
    $password = "";

    $conexion = new mysqli($host, $user, $password, $bd);

    if(!$conexion){
        die("Error al conectar " . mysqli_connect_error());
    }

    $allUsers = mysqli_query($conexion, "SELECT * FROM usuario ");