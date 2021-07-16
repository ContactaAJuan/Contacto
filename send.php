<?php 
$destino = "pg8872898@gmail.com";

$nombre = $_REQUEST['nombre'];
$correo = $_REQUEST['correo'];
$telefono = $_REQUEST['telefono'];

$asunto = "Contacto Web";

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono;

mail($destino,$asunto,$contenido);

header("Location: thank_you.html");
?>