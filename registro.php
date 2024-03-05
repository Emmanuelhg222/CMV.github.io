<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Para poder usar acentos en la página web -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Esto es para la interfaz adaptable a los dispositivos -->
    <title>Registro</title> <!-- El título de la página -->
    <link rel="icon" href="Logo.jpeg" type="image/x-icon"> <!-- Para mostrar el logo en la pestaña -->
    <link href="Estilos.css" rel="stylesheet" type="text/css"> <!-- Para importar el archivo de estilos CSS -->
    <style>
        /* Estilo para el fondo */
        body {
            background-color: #f8f8f8; /* Cambia el color de fondo a un tono de azul claro */
            background-size: cover; /* Esta propiedad asegura que la imagen cubra todo el documento HTML */
        }
    </style>
</head>

<body>
    <div style="display: flex;">
        <div class="containerRI">
            <img src="Registro.jpg" alt="Imagen izquierda" width="100%" height="100%">
        </div>

        <div class="containerR">
            <div>
                <img src="Logo.jpeg" alt="Imagen de inicio de sesión" width="150" height="150" style="margin-top: 0;">
                <h1 style="text-align: left; color: #040483">Registro</h1>
                <form action="registro_action.php" method="POST"> <!-- Formulario de registro -->
                    <div style="display: flex; flex-direction: row;">
                        <div style="margin-right: 20px; flex: 1;">
                            <label style="text-align: left; color: #040483;">Nombre</label>
                            <input type="text" id="nombre" name="nombre" maxlength="30" style="width: 100%;">
                        </div>
                        <div style="flex: 1;">
                            <label style="text-align: left; color: #040483;">Apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" maxlength="50" style="width: 100%;">
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: row;">
                        <div style="margin-right: 20px; margin-bottom: 20px; flex: 1;">
                            <label style="text-align: left; color: #040483;">Estado</label>
                            <input type="text" id="estado" name="estado" maxlength="45" style="width: 100%;">
                        </div>
                        <div style="margin-right: 20px; margin-bottom: 20px; flex: 1;">
                            <label style="text-align: left; color: #040483;" for="ciudad">Ciudad:</label>
                            <input type="text" id="ciudad" name="ciudad" maxlength="50" style="width: 100%;">
                        </div>
                        <div style="flex: 1;">
                            <label style="text-align: left; color: #040483;" for="delegacion">Delegación:</label>
                            <input type="text" id="delegacion" name="delegacion" maxlength="45" style="width: 100%;">
                        </div>
                    </div>                    

                    <div style="display: flex; flex-direction: row;">
                        <div style="margin-bottom: 20px; flex: 1; margin-right: 10px;">
                            <label style="text-align: left; color: #040483;" for="calle">Calle:</label>
                            <input type="text" id="calle" name="calle" maxlength="45" style="width: 100%;">
                        </div>
                        <div style="margin-bottom: 20px; flex: 1; margin-right: 10px;">
                            <label style="text-align: left; color: #040483;" for="num_interior">Número Interior:</label>
                            <input type="text" id="num_interior" name="num_interior" maxlength="6" style="width: 100%;">
                        </div>
                        <div style="flex: 1;">
                            <label style="text-align: left; color: #040483;" for="num_exterior">Número Exterior:</label>
                            <input type="text" id="num_exterior" name="num_exterior" maxlength="6" style="width: 100%;">
                        </div>
                    </div>
                    
                    <label style="text-align: left; color: #040483" for="email">Correo</label>
                    <input type="email" id="email" name="email" required placeholder="nombre@ejemplo.com" style="width: 100%;">

                    <div style="display: flex; flex-direction: row;">
                        <div style="margin-bottom: 20px; flex: 1; margin-right: 10px;">
                            <label style="text-align: left; color: #040483;" for="password">Contraseña</label>
                            <input type="password" id="password" name="password" required style="width: 100%; margin-right: 5px;">
                            <a href="#" onclick="togglePasswordVisibility('password')"></a>
                        </div>
                        <div style="margin-bottom: 20px; flex: 1;">
                            <label style="text-align: left; color: #040483;" for="password2">Repite la contraseña</label>
                            <input type="password" id="password2" name="password2" required style="width: 100%; margin-right: 5px;">
                            <a href="#" onclick="togglePasswordVisibility()"></a>
                        </div>
                    </div>
                    
                    <button type="submit">Registrar</button> <!-- Botón para enviar el formulario -->
                </form>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>

function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password2");
    var eyeIcon = document.getElementById("eyeIcon");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}
</script>

</body>



</html>

