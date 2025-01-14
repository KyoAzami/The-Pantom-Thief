<?php

//Puente para el procesamiento y envio de correos

require './enviar_correo.php';
require './verificar_correo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    if (verificarCorreo($email)) {
        echo enviarCorreo($email, $asunto, $mensaje);
    } else {
        echo "El correo electrónico no es válido.";
    }
}