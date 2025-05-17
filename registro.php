<?php
$conexion = mysqli_connect("localhost", "root", "", "sistema_usuarios");
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);

//Crear la consulta SQL
$sql = "INSERT INTO usuarios (nombre, correo, clave) VALUES ('$nombre', '$correo', '$clave')";
if (mysqli_query($conexion, $sql)) {
    echo "Usuario registrado correctamente. <a href='login.html'>Iniciar sesión</a>";
} else {
    echo "Error al registrar: " . $sql . "<br>" . mysqli_error($conexion);
}
?>
