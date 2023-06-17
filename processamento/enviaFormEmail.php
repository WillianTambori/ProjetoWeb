
<?php
session_start(); 
$para = "projetowebfatecc@gmail.com";
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem = "<br><strong>Email:  </strong>".$email;
$mensagem .= "<br>  <strong>Mensagem: </strong>"
.$_POST['mensagem'];

$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  dominio.com.br<projetowebfatecc@gmail.com>\n";
$headers .= "X-Sender:  <projetowebfatecc@gmail.com>\n";
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <projetowebfatecc@gmail.com>\n";
$headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);
$_SESSION['msg'] = "Contato enviado!";
header("Location: contato.php")
?>
