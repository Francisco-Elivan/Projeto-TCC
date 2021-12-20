<?php
include_once 'php_Mailer/enviarEmail.php';


try{
session_start();
//pegando dados do arquivo contato.php via $_POST e amarzenando nas variaveis//
$nome = $_POST['nome'];
$email = $_POST['email'];
$curso = $_POST['curso'];


// verificando se a variavel vindo do $_POST, esta vazia que seria os campos dos input //
// se estiver o IF retorna a $_SESSION com a mensagem abaixo, redirecionando para contato.php//
if(empty($nome && $email && $curso)){
    $_SESSION['preenchaFormulario'] ='Prencha todos os campo do formulario';
    header('location: contato.php');
   
}else{
    enviar($email,$nome);//funçao que envia email//

// se os inputs estiverem todos preenchido//
// retorna a $_SESSION com a mensagem abaixo, redirecionando para contato.php//
    $_SESSION['formularioPreenchido'] = 'Dados recebido, Obrigado Por colaborar com nosso Projeto';
    header('location: contato.php');
}

  
}catch(Exception $ex){
// caso de qualquer erro inesperado,//
//retorna a $_SESSION com a mensagem abaixo, redirecionando para contato.php//
    $_SESSION['erro'] = 'Erro ao enviar seus Dados';
    header('location: contato.php');
}

?>