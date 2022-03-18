<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="shortcut icon" href="./IMG/teste_icone2.jpg" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro </title>
	<style>
		*{
	margin: 0px;
	padding: 0px;
}

body{
	background:url("img/pizza.jpg");
	background-repeat: no-repeat;
	background-position:center;
	background-size: cover;
	font-family: arial;
	max-width: 100%;
	height: auto;
	object-fit: cover;
    opacity: 0.9;
	
}
input{
	display: block;
	height: 55px;
	width: 400px;
	margin: 10px;
	border-radius: 30px;
	border: 1px solid rgb(153, 44, 44);
	font-size: 16pt;
	padding: 10px 20px;
	background-color: white;
	color: rgb(15, 1, 1);
	outline: none;

}
div#form{
	/*background-color: red;*/
	width: 420px;
	margin: 125px auto 0px auto;

}
div#form-cad{
	background: transparent;
	width: 420px;
	margin: 70px auto 0px auto;
	
	
}

div#form h1, div#form-cad h1{
	text-align: center;
	padding: 20px;
	color: white;

}
a{
	color: white;
	text-decoration: none;

}
a:hover{
	text-decoration: underline;
	text-align: center;
	display: block;
	text-align: center;
}
input[type=submit]{
	background-color: rgb(233, 27, 27);
	border: none;
	cursor: pointer;
	width: 435px;
}
div#msg-sucesso{
width: 400px;
margin: 10px auto;
padding: 10px;
background-color: rgba(50, 205, 50, .3);
border: 1px solid rgb(34,139,34);

}

div.msg-erro{
width: 400px;
margin: 10px auto;
padding: 10px;
background-color: rgba(250, 128, 114, .3);
border: 1px solid rgb(165,42,42);
text-align: center;

}
.volt{
	text-decoration: none;
	float: left;}

	</style>


</head>
<body>
<div id="form-cad">

	<form method="POST" action="">
		<h1>Cadastre-se!</h1>
		<input type="text" name="nome" placeholder="Nome Completo" required="required" maxlength="30">

		<input type="text" name="telefone" placeholder="Telefone" required="required" maxlength="30">

		<input type="email" name="email" placeholder="Usuário"  maxlength="40">

		<input type="password" name="senha" placeholder="Senha" required="required" maxlength="15">

		<input type="password" name="confsenha" placeholder="Confirmar Senha" required="required" maxlength="15">

		<input type="submit" value="Cadastrar">  

	</form>

</div>
<div class="volt">
	<a href="login.php">Acessar</a>	
</div>

<?php
//verificar se o usuário clicou no botão
if(isset($_POST['nome'])){
	$nome = addslashes($_POST['nome']);//addslashes impede que mal intencionados enviem códigos dentro do formulario e façam estragos, ele tira qualquer comando malicioso
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confsenha = addslashes($_POST['confsenha']);
	//verificar se todos os campos foram preenchidos
	if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confsenha))//!empty($nome)= se nn está vazio a variavel nome e assim por diante
	{
		$u->conectar("pizzaria_login", "localhost", "root", "");
		if($u->msgErro == "")//se a variavel msgErro estiver vazia é pq nn deu nenhum erro
		{ 
			if($senha == $confsenha)//verificar se confsenha é a msm senha que digitou em $senha e depois pode cadastrar
			{
				if($u->cadastrar($nome,$telefone,$email,$senha))//se for vdd
				{ 
					?>
					<div id="msg-sucesso">
						Cadastrado com sucesso! Acesse para entrar!
					</div>
					<?php
				  }
				}else{
					?>
					<div class="msg-erro">
					Email ja cadastrado!
				</div>
					<?php
				}
			}else{//caso contrario(digitou errado), imprima
				?>
				<div class="msg-erro">
				Senhas não correspondem.
				</div>
				<?php
			}
			
		}else{
			//caso contrario ira exibir um erro 
			?>
			<div>
				<?php echo "Erro: ".$u->msgErro;?>
			</div>
			<?php
		}
	}else{//caso contrario(se algum campo estiver vazio)
		?>
		<div class="msg-erro"> 
			Preencha todos os campos!
		</div>
		<?php
	}

	?> 

}	


</body>
</html>