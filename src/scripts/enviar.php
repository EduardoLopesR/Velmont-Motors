<?php
require_once __DIR__ . '/../../phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/../../phpmailer/src/SMTP.php';
require_once __DIR__ . '/../../phpmailer/src/Exception.php';
// Tenta carregar o arquivo .env, porém não consegue (nos meus testes pelo menos)
require_once __DIR__ . '/../../.env';

// Importa as classes do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Método não permitido.');
}

// Captura e valida os dados do formulário
$emailRemetente = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$assunto = trim($_POST['assunto'] ?? '');
$mensagem = trim($_POST['mensagem'] ?? '');

if (!$emailRemetente) {
    die('E-mail inválido.');
}

if (empty($assunto) || empty($mensagem)) {
    die('Preencha todos os campos.');
}

// Evitar erros
$assunto = str_replace(["\r", "\n"], '', $assunto);
$mensagemSegura = nl2br(htmlspecialchars($mensagem));

/* Para testar a funcionalidade do envio de email será necessário criar uma senha de aplicativo no Gmail, 
pois o Google não permite mais o uso de senhas normais para aplicativos de terceiros. Tendo que ativar 
a verificação em duas etapas e criar a senha de aplicativo.
E coloque seu email nas partes comentadas "Email que vai receber a mensagem" 

LEMBRE-SE DE NÃO COMPARTILHAR ESSA SENHA OU COMITAR O CÓDIGO COM ELA
*/
try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;          
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'dudukakaroto4@gmail.com'; // Email que vai receber a mensagem
    $mail->Password = ''; // Substitua pela senha de aplicato do seu email
    $mail->Port = 587;

    $mail->setFrom('dudukakaroto4@gmail.com'); // Email que vai receber a mensagem
     $mail->addReplyTo($emailRemetente, 'Visitante do site');
    $mail->addAddress('dudukakaroto4@gmail.com'); // Email que vai receber a mensagem

     $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = "<strong>De:</strong> {$emailRemetente}<br><br>{$mensagemSegura}";
    $mail->AltBody = "De: {$emailRemetente}\n\n{$mensagem}";

    if($mail->send()) {
        echo 'Email enviado com sucesso!';
    } else {
        echo 'Erro ao enviar o email: ' . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}