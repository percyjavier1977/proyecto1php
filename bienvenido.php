<?php
session_start();
// Verificar si el usuario ha iniciado sesión
// Si no ha iniciado sesión, redirigir a la página de inicio de sesión
if (!isset($_SESSION['usuario'])) {
     header("Location: login.html");
        exit(); // Detiene la ejecución del script
}
?>

<h2>Bienvenido, <?php echo $_SESSION['usuario'];?></h2>
<p>Esta es una página protegida. Solo los usuarios registrados pueden acceder a ella.</p>
<a href="logout.php">Cerrar sesión</a>