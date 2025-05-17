<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "sistema_usuarios");
$correo = $_POST['correo'];
$clave = $_POST['clave'];
// Crear la consulta SQL
$sql = "SELECT * FROM usuarios WHERE correo='$correo'";
$resultado = mysqli_query($conexion, $sql); // Ejecutar la consulta
// Verificar si se encontró un usuario
if (mysqli_num_rows($resultado)==1){
    $usuario = mysqli_fetch_assoc($resultado);
    // Verificar la contraseña
    if(password_verify($clave, $usuario['clave'])){
        // Iniciar sesión
        $_SESSION['usuario'] = $usuario['nombre'];
        header("Location: bienvenido.php");
    } else {
        echo "Contraseña incorrecta. <a href='login.html'>Intenta de nuevo</a>";
    }
}else{
    echo "No se encontró el usuario. <a href='login.html'>Intenta de nuevo</a>";
}
?>