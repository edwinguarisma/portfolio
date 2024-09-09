<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = htmlspecialchars($_POST['name']);
    $correo = htmlspecialchars($_POST['email']);
    $asunto = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['message']);

    // Configurar el correo
    $to = "proyectoedwinjose@gmail.com"; // Cambia esto por tu dirección de correo
    $subject = "Nuevo mensaje de contacto: $asunto";
    $body = "Nombre: $nombre\nCorreo: $correo\nAsunto: $asunto\nMensaje:\n$mensaje";
    $headers = "From: $correo";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
