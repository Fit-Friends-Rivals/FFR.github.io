<?php
// Incluir aquí la lógica para verificar la sesión del usuario si es necesario

// Iniciar la sesión (asegúrate de haber llamado a session_start() en todas las páginas que utilizan sesiones)
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    // Si el usuario no ha iniciado sesión, redirigirlo a la página de inicio de sesión
    header("Location: index.html");
    exit();
}

// Si el usuario ha iniciado sesión, mostrar la página de bienvenida
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Esta es la página de bienvenida. Puedes personalizarla según tus necesidades.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
