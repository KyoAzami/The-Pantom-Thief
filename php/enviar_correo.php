<?php

//Archivo para enviar el correo

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require 'path/to/vendor/autoload.php';        Ajustar el path

function enviarCorreo($destinatario, $asunto, $mensaje) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.tu-servidor.com'; // Cambia esto por tu servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'tu-correo@example.com'; // Tu correo
        $mail->Password = 'tu-contraseña'; // Tu contraseña
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('tu-correo@example.com', 'Tu Nombre');
        $mail->addAddress($destinatario);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;

        $mail->send();
        return "Correo enviado con éxito a $destinatario";
    } catch (Exception $e) {
        return "Error al enviar el correo: {$mail->ErrorInfo}";
    }
}