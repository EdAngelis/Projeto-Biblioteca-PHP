<?php
 
// inclui as classes do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
// inclui o autoloader do Composer
require 'vendor/autoload.php';
 
// inicia a classe PHPMailer habilitando o disparo de exceções
$mail = new PHPMailer(true);
//try
//{
    // habilita o debug
    // 0 = em mensagens de debug
    // 1 = mensagens do cliente SMTP
    // 2 = mensagens do cliente e do servidor SMTP
    // 3 = igual o 2, incluindo detalhes da conexão
    // 4 = igual o 3, inlcuindo mensagens de debug baixo-nível
    $mail->SMTPDebug = 2;
    // utilizar SMTP
    $mail->isSMTP();
 
    // habilita autenticação SMTP
    $mail->SMTPAuth = true;
 
    // servidor SMTP
    $mail->Host = 'smtp.gmail.com'; 
 
    // usuário, senha e porta do SMTP
    $mail->Username = 'ed4ngelis@gmail.com';
    $mail->Password = 'Google711724';
    $mail->Port = 465;
     
    // tipo de criptografia: "tls" ou "ssl"
    $mail->SMTPSecure = 'ssl';
     
    // email e nome do remetente
    $mail->setFrom('ed4ngelis@gmail.com', 'Ed');
     
    // Email e nome do(s) destinatário(s)
    // você pode chamar addAddress quantas vezes quiser, para
    // incluir diversos destinatários
    $mail->addAddress('ed4ngelis@gmail.com', 'Destinatário 1');
     
    // endereço que receberá as respostas
    //$mail->addReplyTo('<a href="http://rberaldo.com.br/contato/">contato</a>@ultimatephp.com.br', 'ULTIMATE PHP'); 
     
    // com cópia (CC) e com cópia oculta (BCC)
    //$mail->addCC('copia@site.com');
    //$mail->addBCC('copia_oculta@site.com');
     
    // anexa um arquivo
    //$mail->addAttachment('composer.json');
 
    // define o formato como HTML
    $mail->isHTML(true);
     
    // codificação UTF-8
    $mail->Charset = 'UTF-8';
     
    // assunto do email
    $mail->Subject = 'TESTE 3';
     
    // corpo do email em HTML
    $mail->Body    = '<h1>Testando o <em>PHPMailer 6</em></h1>';
     
    // corpo do email em texto
    $mail->AltBody = 'Testando o PHPMailer 6';
     
    // envia o email
    $mail->send();
     
    echo 'Mensagem enviada com sucesso!' . PHP_EOL;
//}
//catch (Exception $e)
//{
 //   echo 'Falha ao enviar email.' . PHP_EOL;
//    echo 'Erro: ' . $mail->ErrorInfo . PHP_EOL;
//}