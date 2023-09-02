<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['nombre'])
        && !empty($_POST['empresa'])
        && !empty($_POST['telefono'])
        && !empty($_POST['email'])
        && !empty($_POST['mensaje'])
    ){
        $nombre = $_POST["nombre"];
        $telefono = $_POST["empresa"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];


        $to = "mcash91@gmail.com";
        $subject = "Nuevo mensaje";
        $body = "Nombre: {$nombre}\n Empresa: {$empresa}\nEmail: {$email}\nTelefono: {$telefono}\nMensaje: {$mensaje}";
        $headers = "De: {$email}";


        if (mail($to, $subject, $body, $headers)) {
            echo "Mensaje enviado correctamente!";
        } else {
            echo "Error al enviar el mensaje.";
        }
    }
}