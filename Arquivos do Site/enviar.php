<?php 
require_once("config.php");

$nome = $_POST['nome_contato'];
$email = $_POST['email_contato'];
$mensagem = $_POST['mensagem_contato'];

$destinatario = $email_adm;
$assunto = 'Email de Contato - '.$nome_site;
$mensagem = 'Nome: '.$nome. "\r\n"."\r\n" .'Email: '.$email. "\r\n"."\r\n" .'Mensagem: '.$mensagem;
$cabecalhos = "From: ".$email;
mail($destinatario, $assunto, $mensagem, $cabecalhos);

 ?>

<script>alert('Enviado com Sucesso.'); </script>

<meta http-equiv="refresh" content="0; url=index.php#mu-contact">
