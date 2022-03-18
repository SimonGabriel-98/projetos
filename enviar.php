<?php
//Sessão
session_start();

date_default_timezone_set('America/Sao_Paulo');

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))) {

	$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
	$email = $_POST['email'];
	$assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
	$mensagem = $_POST['mensagem'];
	$data = date('d/m/Y H:i:s');

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'pizzaria.bomsabor14@gmail.com';
	$mail->Password = 'Pizzaria.14';
	$mail->Port = 587;

	$mail->setFrom('pizzaria.bomsabor14@gmail.com');
	$mail->addAddress('pizzaria.bomsabor14@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = $assunto;
	$mail->Body = "Nome: {$nome}<br>
				   Email: {$email}<br>
				   Mensagem: {$mensagem}<br>
				   Data/hora: {$data}";

	if($mail->send()) {
		//$_SESSION['mensagem'] = "<center><font color=\'#ff00ff\'>Email enviado com sucesso!</font></center>";
		$_SESSION['mensagem'] = '<script>alert("Email enviado com sucesso!")</script>';
		header('Location:./contato.php');

	} else {
		//$_SESSION['mensagem'] = "<center><font color=\'ff00ff\'>Email não enviado!</center>";
		$_SESSION['mensagem'] = '<script>alert("Email não enviado!")</script>';
		header('Location:./contato.php');
	}
} else {
	//$_SESSION['mensagem'] = "<center><font color=\'ff00ff\'>Não enviado: informar o email e a mensagem!</font></center>";
	$_SESSION['mensagem'] = '<script>alert("Não enviado: campos não preenchidos")</script>';
		header('Location:./contato.php');
}
