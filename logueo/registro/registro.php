<?php
// Conexión a la base de datos (debes configurar estos valores)
$servername = "bln3w6olphx5d3cg1phg-mysql.services.clever-cloud.com";
$username = "uco7q8mskvjc5nbs";
$password = "FmOfTSsD35cbmogntbLW";
$dbname = "bln3w6olphx5d3cg1phg";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario de registro
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para insertar un nuevo usuario en la base de datos
$sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    // Registro exitoso, redirigir al usuario a la página de inicio de sesión
    header("Location: index.html");
} else {
    // Error en el registro, puedes manejarlo según tus necesidades
    echo "Error en el registro: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
