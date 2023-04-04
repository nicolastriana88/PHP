<?php
// datos del formulario

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje']; 

// Configurar datos del correo

$destinario = 'nicotz8866@gmail.com';
$asunto = 'Formulario de Contacto';
$cuerpo ="Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";

//eniar correo

mail($destinario,$asunto,$cuerpo);

// mostrar mensaje extio de envio

echo "Gracias por contactarnos. Te responderemos a la brevedad posible.";
?>
