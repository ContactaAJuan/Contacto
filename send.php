<?php 
$destino = "pg8872898@gmail.com";

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$asunto = "Contacto Web";

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono;

mail($destino,$asunto,$contenido);

header("Location: thank_you.html");
?>
