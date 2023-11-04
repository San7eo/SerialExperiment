<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $para = "santi7.amaro@gmail.com";
    $asunto = "Nuevo mensaje de contacto de $nombre";
    $mensajeCorreo = "Nombre: $nombre\n";
    $mensajeCorreo .= "Email: $email\n";
    $mensajeCorreo .= "Mensaje:\n$mensaje";

    // Enviar el correo electrónico
    mail($para, $asunto, $mensajeCorreo);

    // Redirigir al usuario a una página de éxito
    header("Location: gmail.com");
}
?>
