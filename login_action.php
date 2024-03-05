<?php
include 'db_connection.php';

// Verificar si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario de inicio de sesión
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Consulta SQL preparada para evitar inyección SQL
    $sql = "SELECT * FROM Usuarios 
            INNER JOIN Correos ON Usuarios.Correos_id = Correos.idCorreos
            INNER JOIN Personas ON Correos.Personas_id = Personas.idPersonas
            WHERE Correos.Correo = '$email' AND Usuarios.Contraseña = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Las credenciales son válidas, usuario autenticado
        echo "<script>alert('Inicio de sesión exitoso. Bienvenido.');</script>";
        echo "<script>window.location = 'login.php';</script>"; // Redireccionar a login.php
    } else {
        // Las credenciales son inválidas
        echo "<script>alert('Correo electrónico o contraseña incorrectos.'); window.location = 'login.php';</script>";
    }
} else {
    // Si no se reciben datos por POST, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

$conn->close();
?>
