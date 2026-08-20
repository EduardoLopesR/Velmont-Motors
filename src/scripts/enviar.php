<?php
require_once __DIR__ . '/../../phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/../../phpmailer/src/SMTP.php';
require_once __DIR__ . '/../../phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;          
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'dudukakaroto4@gmail.com';
    $mail->Password = 'nbch qiea puxv ytww'; 
    $mail->Port = 587;

    $mail->setFrom('dudukakaroto4@gmail.com');
    $mail->addAddress('dudukakaroto4@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Teste de envio de email';
    $mail->Body = 'Este é um teste de envio de email <strong>usando PHPMailer</strong>.';
    $mail->AltBody = 'Este é um teste de envio de email usando PHPMailer.';

    if($mail->send()) {
        echo 'Email enviado com sucesso!';

    } else {
        echo 'Erro ao enviar o email: ' . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}