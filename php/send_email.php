<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['messaje']);

    $to = "nlopez.prog@gmail.com";
    $subject = "Nuevo mensaje de $name";
    $body = "Nombre: $name\nTeléfono: $tel\nCorreo: $email\nMensaje: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método no permitido.";
}
?>