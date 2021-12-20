<?php

include_once 'PHPMailer.php';
include_once 'Exception.php';
include_once 'SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carregar o autoloader do composer

// Instância da classe
function enviar($email,$nome){
    
$mail = new PHPMailer(true);
try
{
    // Configurações do servidor
    $mail->isSMTP();        //Devine o uso de SMTP no envio
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username   = 'humanize.Teletrabalho@gmail.com';
    $mail->Password   = 'H@_Humanize_@H';
    // Criptografia do envio SSL também é aceito
    $mail->SMTPSecure = 'tls';
    // Informações específicadas pelo Google
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    // Define o remetente
    $mail->setFrom('humanize.Teletrabalho@gmail.com', 'HUMANIZE');
    // Define o destinatário
    $mail->addAddress($email,$nome);
    // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
     // Define que a codificação do conteúdo da mensagem será utf-8
    $mail->CharSet    = "utf-8";
    $mail->setLanguage($langcode ="br",$lang_path='');
    $mail->Subject = "Ola, {$nome} juntos somos mais forte contra o COVIDE-19";
    $mail->Body  = 'Podemos acreditar que tudo que a vida nos oferecerá no futuro é repetir o que fizemos ontem e hoje.
     Mas, se prestarmos atenção, vamos nos dar conta de que nenhum dia é igual a outro. Cada manhã traz uma bênção escondida;
    uma bênção que só serve para esse dia e que não se pode guardar nem desaproveitar. Se não usamos este milagre hoje, ele vai 
    se perder. Este milagre está nos detalhes do cotidiano; é preciso viver cada minuto porque ali encontramos a saída de nossas 
    confusões, a alegria de nossos bons momentos, a pista correta para a decisão que tomaremos. Nunca podemos deixar que cada dia 
    pareça igual ao anterior porque todos os dias são diferentes, porque estamos em constante processo de mudança.';
    $mail->AltBody = 'Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML';
    
    // Enviar
    $mail->send();
    $mail->smtpClose();
   
    
}
catch (Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}











?>
