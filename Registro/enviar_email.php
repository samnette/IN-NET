<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require 'db.php';

$errorRegistro = '';

function comprobar_email($email) {
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
}

function duplicadocorreo($correo) {

    $conexion = conectar();
    $correo = $conexion->real_escape_string($correo);

    $consulta = "SELECT email FROM usuario WHERE email = '$correo'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
        $conexion->close();
        return false;
    } else {
        $conexion->close();
        return true;
    }
}

function duplicadonick($nick) {

    $conexion = conectar();
    $nick = $conexion->real_escape_string($nick);

    $consulta = "SELECT nickname FROM usuario WHERE nickname = '$nick'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
        $conexion->close();
        return false;
    } else {
        $conexion->close();
        return true;
    }
}


if (isset($_POST['registrar'])) {

   if (comprobar_email($_POST['email'])) {
                    if (duplicadocorreo($_POST['email']) && duplicadonick($_POST['nickname'])) {
                                $nombre = $_POST['nombre'];
                                $apellidos = $_POST['apellidos'];
                                $email = $_POST['email'];
                                $pass = $_POST['pass'];
                                $passEnc = md5($pass);
                                $nickname = $_POST['nickname'];
                                $codigo_verificacion = md5(uniqid(rand(), true));
                                $ran_id = rand(time(), 100000000);
                                $unique_id = $ran_id;

                                $file_name = $_FILES['archivo'] ['name'];

                                //FOTOGRAFIA DATOS
                                    $file_tmp = $_FILES['archivo'] ['tmp_name'];
                                    $arreglo = explode(".", $file_name);
                                    $len = count($arreglo);
                                    $pos = $len-1;
                                    $ext = $arreglo[$pos];
                                    $dir = "archivos/";
                                    $file_enc = md5_file($file_tmp);

                                    if ($file_name != ''){
                                        $file_name1 = "$file_enc.$ext";
                                        copy($file_tmp, $dir.$file_name1);
                                    }
                                
                                $fotografia = $file_name1;
                                $archivo_n = $file_name;

                                $smtpHost = 'smtp.gmail.com';
                                $smtpUsername = 'dogewaycompany@gmail.com';   //Ingresen estas credenciales para permitir el acceso en google
                                $smtpPassword = 'mfyzdjkjzmrdsxci'; 
                                $smtpPort = 587;

                                $recipient = $email; 
                                $subject = 'Verificar su cuenta de IN-NET';
                                $message = "Hola, $nombre $apellidos.\n\n";
                                $message .= "¡Gracias por registrarte en IN-NET!\n\n";
                                $message .= "Dale click al siguiente enlace para verificar tu cuenta:\n";
                                $message .= "  ∧,,,∧\n";
                                $message .= "(  ̳• · • ̳)\n";
                                $message .= "/    づ♡ http://localhost/in-net/Registro/verificar.php?email=$email&codigo=$codigo_verificacion";
                    

                                $mail = new PHPMailer();

                                try {
                                    $mail->isSMTP();
                                    $mail->SMTPDebug = SMTP::DEBUG_OFF;
                                    $mail->Host = $smtpHost;
                                    $mail->SMTPAuth = true;
                                    $mail->Username = $smtpUsername;
                                    $mail->Password = $smtpPassword;
                                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                    $mail->Port = $smtpPort;

                                    $mail->setFrom($smtpUsername, 'IN-NET by Robloxianos');
                                    $mail->addAddress($recipient);
                                    $mail->Subject = $subject;
                                    $mail->Body = $message;

                                    if ($mail->send()) {
                                
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $database = "innet";

                                        $conn = new mysqli($servername, $username, $password, $database);

                                        if ($conn->connect_error) {
                                            die("Error de conexión a la base de datos: " . $conn->connect_error);
                                        }

                                        $verificado = 0;

                                        $insertQuery = "INSERT INTO usuario (nombre, email, codigo_verificacion, verificado, pass,
                                        nickname, apellidos, fotografia, archivo_n, unique_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
                                        $stmt = $conn->prepare($insertQuery);
                                        $stmt->bind_param("sssissssss", $nombre, $email, $codigo_verificacion, $verificado, $passEnc, 
                                         $nickname, $apellidos, $fotografia, $archivo_n, $unique_id);

                                        
                                        if ($stmt->execute()) {

                                            header('Location: mensajes/mensaje_verificacion.php');
                                    
                                        } else {
                                
                                            header('Location: mensajes/mensaje_error.php');
                                        }
                                        
                                        $stmt->close();
                                        $conn->close();
                                    } else {

                                        echo "Error al enviar el correo:" . $mail->ErrorInfo;
                                        
                                    
                                    }
                                    
                                } catch (Exception $e) {
                                    echo  "Error al enviar el correo:" . $e->getMessage(); 
                                }
                    }else{ $errorRegistro ="El usuario y/o correo ya estan en uso";}
    }else{$errorRegistro = "Ingrese un correo válido";}

    if (!empty($errorRegistro)) {
        header('Location: registro.php?error=' . urlencode($errorRegistro));
        exit;
    }
}
?>