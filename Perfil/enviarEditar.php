<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    require 'config.php';

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if (!empty($_FILES['archivo']['name'])) {
    $file_name = $_FILES['archivo'] ['name'];
    $file_tmp = $_FILES['archivo'] ['tmp_name'];
    $arreglo = explode(".", $file_name);
    $len = count($arreglo);
    $pos = $len-1;
    $ext = $arreglo[$pos];
    $dir = "../Registro/archivos/";
    $file_enc = md5_file($file_tmp);

    if ($file_name != ''){
        $file_name1 = "$file_enc.$ext";
        copy($file_tmp, $dir.$file_name1);
    }
    $foto = $file_name1;
    }

    $idUser = $_POST['iduser'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $nickname = $_POST['nickname'];
    $contra = $_POST['pass'];
    $pass = md5($contra);

    if (!empty($contra) && empty($_FILES['archivo']['name'])) {
        $sql = "UPDATE usuario SET nombre = '$nombre', pass = '$pass', 
        nickname = '$nickname', apellidos = '$apellidos'
        WHERE id = '$idUser'";
    } else if (empty($contra) && !empty($_FILES['archivo']['name'])) {
        $sql = "UPDATE usuario SET nombre = '$nombre', 
        nickname = '$nickname', apellidos = '$apellidos', fotografia = '$foto',
        archivo_n = '$file_name' WHERE id = '$idUser'";
    } else if (!empty($contra) && !empty($_FILES['archivo']['name'])) {
        $sql = "UPDATE usuario SET nombre = '$nombre', pass = '$pass', 
        nickname = '$nickname', apellidos = '$apellidos', fotografia = '$foto',
        archivo_n = '$file_name' WHERE id = '$idUser'";
    } else {
        $sql = "UPDATE usuario SET nombre = '$nombre', 
        nickname = '$nickname', apellidos = '$apellidos'
        WHERE id = '$idUser'";
    }

    if ($conn->query($sql) == TRUE) {
        header("Location: lista.php");
    } else {
        echo "Error al insertar el registro: " . $conn->error;
    }

    $conn->close();
}

?>