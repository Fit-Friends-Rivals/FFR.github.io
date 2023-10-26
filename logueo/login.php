<?php
// Conexión a la base de datos (debes configurar estos valores)
$servername = "bln3w6olphx5d3cg1phg-mysql.services.clever-cloud.com";
$username = "uco7q8mskvjc5nbs";
$password = "QAA8jmNFE0Gqd01CpPkI";
$dbname = "bln3w6olphx5d3cg1phg";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

// Verificar si se encontró un usuario con las credenciales
if ($result->num_rows > 0) {
    // Inicio de sesión exitoso, redirigir al usuario a una página de bienvenida
    header("Location: bienvenida.php");
} else {
    // Inicio de sesión fallido, redirigir de nuevo a la página de inicio de sesión con un mensaje de error
    header("Location: index.html?error=1");
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

