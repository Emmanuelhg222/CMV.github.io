<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Para poder usar acentos en la pagina web -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Esto es lo de la interface adaptable a los dispositivos -->
    <title>Inicia sesión</title> <!-- Es el titulo de la pagina, lo que sale en la pestana-->
    <link rel="icon" href="Logo.jpeg" type="image/x-icon"> <!-- Para que se vea el logo en la pestana -->
    <link href="Estilos.css" rel="stylesheet" type="text/css"> <!-- Es como llamar al archivo css para usarlo -->
    <!-- ESTOS LLAMAN A LOS ARCHIVOS QUE TIENEN LO DE LOS ICONOS -->
    <link href="fa/css/fontawesome.css" rel="stylesheet"> 
    <link href="fa/css/brands.css" rel="stylesheet">
    <link href="fa/css/solid.css" rel="stylesheet">
    
    <style>
        /* Esta parte es para poner el color en el fondo */
        body {
            background-color: #6bddfac5; /* Cambia el color de fondo a un tono de azul claro */
            background-size: cover; /* This property ensures the image covers the entire HTML document */
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="display: flex;">
            <div style="width: 58%; padding: 0px;">
                <img src="Fondo.jpg" alt="Imagen izquierda" width="100%" height="100%">
            </div>
            
            <div style="width: 2%;">
            </div>
            
            <div style="width: 40%; padding: 20px;">
                <img src="Logo.jpeg" alt="Imagen de inicio de sesión" width="150" height="150">
                <h1 style="text-align: left; color: #040483">Inicia sesión</h1>

                <!-- Formulario de inicio de sesión -->
                <form action="login_action.php" method="post"> 
                    <label style="text-align: left; color: #040483" for="email">Email</label>
                    <input type="email" name="email" required>
                    <!--boton de contrase;a-->
                        <label style="text-align: left; color: #040483;" for="password">Contraseña</label>
                        <input type="password" id="password" name="password" required style="width: 100%; margin-right: 5px;">
                        <a href="#" onclick="togglePasswordVisibility('password')"></a>
                
                    <div style="display: flex; justify-content: space-between;">
                        <div style="display: flex; align-items: center;">
                            <input type="checkbox" id="remember-me" name="remember-me">
                            <label style= "color: #040483" for="remember-me">Mantén la sesión abierta</label>
                        </div>                
                        <p class="sign-up" style="margin: 0;"><a href="recuperar-contrasena.php">¿Olvidaste tu contraseña?</a></p>              
                    </div> 
                
                    <br>   
                    <button type="submit">Iniciar sesión</button>            
                </form>
        
                <!-- Sección para redes sociales -->
                <div style="text-align: center;">
                    <hr style="width: 45%; display: inline-block; vertical-align: middle;">
                    <span style="display: inline-block; vertical-align: middle;">o</span>
                    <hr style="width: 45%; display: inline-block; vertical-align: middle;">
                </div>

                <div class="social-login">        
                    <!-- Botón de Facebook -->
                    <button class="redesSociales"><i class="fab fa-facebook-f"></i> Facebook</button>        
                    <!-- Botón de Google -->
                    <button class="redesSociales"><i class="fab fa-google"></i> Google</button>
                    <!-- Botón de Twitter -->
                    <button class="redesSociales"><i class="fab fa-twitter"></i> Twitter</button>
                </div>
        
                <!-- Enlace para registro -->
                <div class="sign-up">
                    <p>¿No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
                </div>
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
