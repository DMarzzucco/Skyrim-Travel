<?php
    $name= $_POST['name'];
    $mail= $_POST['mail'];
    $telefon= $_POST['telefon'];
    $FI= $_POST['FI'];
    $FF= $_POST['FF'];

    $contenido_mensaje= 'El nombre de la persona es: ' . $name . ".\r\n";
    $contenido_mensaje.= 'El mail de la persona es: ' . $mail . ".\r\n";
    $contenido_mensaje.= 'El telefono de la persona es: ' . $telefon . ".\r\n";
    $contenido_mensaje.= 'La fecha de inicio es: ' . $FI . ".\r\n";
    $contenido_mensaje.= 'La fecha de fin es: ' . $FF . ".\r\n";
    $contenido_mensaje.= 'Enviado el: ' . date('d/m/Y', time());
    
    $para = 'drrkermazyxokv@gmail.com';
    $asunto = 'Reservacion-Skyrim';

    $headers= "From: $mail\r\n";
    $headers.= "Reply-To: $mail\r\n";
    $headers.= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($para, $asunto, utf8_decode($contenido_mensaje), $headers)){
        header ("Location: /BIenvenido/preparativos/mundos/reserva-conf.html");//reyenar
    } else {
        echo "Surgio un error al reservarse";
    }
?>