<?php
include 'db_connection.php';

// Obtener datos del formulario de registro
$password = $_POST['password'];
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$estado = $_POST['estado'];
$ciudad = $_POST['ciudad'];
$delegacion = $_POST['delegacion'];
$calle = $_POST['calle'];
$numero_ext = $_POST['num_exterior']; // Corregido el nombre del campo
$numero_int = $_POST['num_interior']; // Corregido el nombre del campo

// Insertar datos en la tabla Personas
$sql_personas = "INSERT INTO Personas (Nombre, Apellidos, Estado, Ciudad, Delegación, Calle, `Numero ext`, `Nummero int`) 
                 VALUES ('$nombre', '$apellidos', '$estado', '$ciudad', '$delegacion', '$calle', '$numero_ext', '$numero_int')";

if ($conn->query($sql_personas) === TRUE) {
    $id_deLapersona = $conn->insert_id;
    
    // Insertar datos en la tabla Correos
    $sql_correos = "INSERT INTO Correos (Correo, Personas_id) VALUES ('$email', '$id_deLapersona')";
    
    if ($conn->query($sql_correos) === TRUE) {
        $id_delCorreo = $conn->insert_id;
        
        // Insertar datos en la tabla Usuarios
        $sql_usuarios = "INSERT INTO Usuarios (Contraseña, Tipo_Usuario_id, Correos_id) VALUES ('$password', 1, '$id_delCorreo')";
        
        if ($conn->query($sql_usuarios) === TRUE) {
            // Registro exitoso, mostrar mensaje y redirigir al usuario
            echo "<script>alert('¡Registro exitoso!'); window.location='login.php';</script>";
        } else {
            echo "Error al registrar usuario: " . $conn->error;
        }
    } else {
        echo "Error al registrar correo: " . $conn->error;
    }
} else {
    echo "Error al registrar persona: " . $conn->error;
}

$conn->close();
?>
