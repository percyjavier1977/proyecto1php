<?php
session_start();
session_destroy(); // Destruir la sesión
header("Location: login.html"); // Redirigir a la página de inicio de sesión

?>

