<?php
$conexion = new mysqli("localhost", "root", "", "login_register_db");

$nombre     = $_["nombre"] ?? '';
$correo     = $_POST["correo"] ?? '';
$usuario    = $_POST["usuario"] ?? '';
$contraseña = password_hash($_POST["contraseña"] ?? '', PASSWORD_DEFAULT);

// Validación básica (opcional)
if (!$nombre || !$correo || !$usuario || !$contraseña) {
    die("Faltan datos en el formulario.");
}

$sql = "INSERT INTO usuarios (nombre, correo, usuario, contraseña) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssss", $nombre, $correo, $usuario, $contraseña);

if ($stmt->execute()) {
    echo "✅ Registro exitoso.";
} else {
    echo "❌ Error al registrar: " . $conexion->error;
}
?>
