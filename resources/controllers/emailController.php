<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function send_email($email, $asunto, $mensaje)
{
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '4f75970969ba28';
    $mail->Password = 'c1500172ad3e38';
    $mail->Port = 25;
    $mail->SMTPSecure = 'tls';
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';

    $mail->setFrom('registro@santacruz.com', 'Registro');
    $mail->addAddress($email);
    $mail->Subject = $asunto;
    $mail->Body = $mensaje;
    if ($mail->send()) {
        $emailSent = true;
    }
}
?>