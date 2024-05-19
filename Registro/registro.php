<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link href="../CSS/index.css" rel="stylesheet"/>
    <link href="../CSS/formulario.css" rel="stylesheet"/>
    <script>
        function handleFileChange() {
            const fileInput = document.getElementById('archivo');
            const selectedImage = document.getElementById('selected-image');

            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];

                // Mostrar la imagen seleccionada
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

        function mostrarError(mensaje) {
            var errorElement = document.getElementById('error-message');
            if (errorElement) {
                errorElement.textContent = mensaje;
                errorElement.style.display = 'block';
            }
        }

        function validarEntrada(e) {
            const pattern = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
            if (!pattern.test(e.target.value)) {
                e.target.setCustomValidity('Solo se permiten letras y espacios.');
            } else {
                e.target.setCustomValidity('');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            var savedFormData = localStorage.getItem('registroFormData');

            if (savedFormData) {
                var formData = JSON.parse(savedFormData);
                document.getElementById('nombre').value = formData.nombre || '';
                document.getElementById('apellidos').value = formData.apellidos || '';
                document.getElementById('nickname').value = formData.nickname || '';
                document.getElementById('email').value = formData.email || '';
            }

            document.getElementById('registroform').addEventListener('submit', function () {
                var formData = {
                    nombre: document.getElementById('nombre').value,
                    apellidos: document.getElementById('apellidos').value,
                    nickname: document.getElementById('nickname').value,
                    email: document.getElementById('email').value,
                };

                localStorage.removeItem('registroFormData');

                localStorage.setItem('registroFormData', JSON.stringify(formData));
            });

            document.getElementById('nombre').addEventListener('input', validarEntrada);
            document.getElementById('apellidos').addEventListener('input', validarEntrada);
        });
    </script>
</head>
<body>
    <nav class="nav">
        <div class="librologo">
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
        <?php
            if (isset($_GET['error'])) {
                $errorRegistro = urldecode($_GET['error']);
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() { mostrarError("' . $errorRegistro . '"); });';
                echo '</script>';
            }
        ?>
        <form id="registroform" class="form" enctype="multipart/form-data" action="enviar_email.php" method="post">
            <h2>REGISTRATE</h2><br>
            <img class="imgform" src="http://localhost/IN-NET/Imagenes/formularios/registro.png"><br><br><br>
            <div id="error-message" style="color: red; font-size: 12px; margin-bottom: 17px; display: none;"></div>
            <input type="text" id="nombre" name="nombre" required placeholder="Ingresa tu nombre(s)" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios"><br><br>
            <input type="text" id="apellidos" name="apellidos" required placeholder="Ingresa tus apellidos" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios"><br><br>
            <input type="text" id="nickname" name="nickname" required placeholder="Ingresa tu nickname"><br><br>
            <input type="email" id="email" name="email" required placeholder="Ingresa tu correo"><br><br>
            <input type="password" name="pass" required placeholder="Ingresa tu contraseña"><br><br>
            <label class="custom-file-upload">
                <span class="file-upload-text" id="file-text">Subir Foto</span>
                <input type="file" id="archivo" name="archivo" accept=".jpg, .jpeg, .png" required onchange="handleFileChange()"/>
            </label><br><br><br>
            <input class="boton" type="submit" name="registrar" value="Registrar"><br><br>
            <a href="../Inicio/index.php">✧ Ya tienes una cuenta? Inicia sesión aquí ✧</a><br><br>
        </form>
    </div><br><br><br><br><br><br>
    <footer>
        <p>&copy; 2024 IN-NET</p>
    </footer>
</body>
</html>
