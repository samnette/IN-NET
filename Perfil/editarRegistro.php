<?php 
    include_once '../Inicio/includes/user.php';
    include_once '../Inicio/includes/user_session.php';
    
    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());

?>

<!DOCTYPE html>
<html>

    <head>
        
    <title>Edición de Perfil</title>
    <link href="http://localhost/IN-NET/CSS/index.css" rel="stylesheet"/>
    <link href="http://localhost/IN-NET/CSS/formularie.css" rel="stylesheet"/>

        <script src="jquery-3.3.1.min.js"></script>

        <script>

            variable1 = 0;

            function validarN() {
            var nickname = $('#nickname').val();
            $.ajax({
                url         : 'verificar1.php',
                type        : 'post',
                dataType    : 'text',
                data: {
                nickname: nickname,
                },
                success     : function(res) {
                    console.log(res);
                    if (res = "nickname"){
                        variable1 = 1;
                    } else{  
                        variable1 = 0;  
                    }
                    
                },error: function() {
                    alert ('Error');
                }
            });
            } 

            function validar() {
                var nombre = $('#nombre').val();
                var apellidos = $('#apellidos').val();
                var nickname = $('#nickname').val();
                var pass = $('#pass').val();
                var archivo = $('#archivo').val();

                if (nombre == '' || apellidos == '' || nickname == '') {
                    mostrarMensajeError('Faltan campos por llenar');
                    return false;
                }else if (variable1 == 1){
                    mostrarMensajeError('El nickname esta en uso');
                    return false;
                }
                return true;    
            }

            function mostrarMensajeError(mensaje) {
                $('#mensaje').show().html(mensaje);
                setTimeout(function() {
                    $('#mensaje').html('').hide();
                }, 5000);
            }

            function handleFileChange() {
                    const fileInput = document.getElementById('archivo');
                    const selectedImage = document.getElementById('selected-image');

                    if (fileInput.files.length > 0) {
                        const file = fileInput.files[0];

                        const reader = new FileReader();
                        reader.onload = function (e) {
                            selectedImage.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                        selectedImage.style.display = 'block';
                    } else {
                        selectedImage.style.display = 'none';
                        selectedImage.src = '';
                    }
            }
        </script>

    </head>
    
    <body>
    <?php include 'header.php'; ?>
    <div class="contenedorR">
        <h2>EDITAR PERFIL</h2>
        <form class="form" enctype= "multipart/form-data" action="enviarEditar.php" method="post">
                <div id="mensaje"></div>
                <input type="hidden" name="iduser" value="<?php echo $user->getuserId();?>">
                <input type="text" id="nombre" name="nombre" value = "<?php echo $user->getNombre();?>" placeholder="Editar tu nombre(s)" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios"><br><br>
                <input type="text" id="apellidos" name="apellidos" value = "<?php echo $user->getApellidos();?>" placeholder="Editar tus apellidos" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios"><br><br>
                <input type="text" id="nickname" name="nickname"  value = "<?php echo $user->getUsername();?>" placeholder="Editar nickname" onblur="validarN();"><br><br>
                <input type="password" name="pass" placeholder="Editar contraseña"><br><br>
                <label class="custom-file-upload">
                    <span class="file-upload-text" id="file-text">Editar Foto</span>
                    <input type="file" id ="archivo" name="archivo" accept=".jpg, .jpeg, .png" onchange="handleFileChange()"/>
                    
                </label><br>
                <input class='boton' type="submit" onclick=" return validar();" name="registrar" value="Editar">
        </form>
    </div>

</body>
<footer>
        <p>&copy; 2024 IN-NET</p>
    </footer>

<?php 

} else {header("Location: ../Inicio/index.php");
  exit();
} 
?>