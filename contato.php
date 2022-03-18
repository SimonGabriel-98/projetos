<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário de contato</title>
	<link rel="stylesheet" href="CSS/contato.css">
	  <link rel="shortcut icon" href="./IMG/teste_icone2.jpg" type="image/x-icon">
	<style type="text/css">
		.input22{
  		float: right;
  		margin-right: 290px;
	    margin-top: -35px;
	   padding: 5px;
	   text-align: center;
	   border-radius: 0%;
}
.submit22{
	float: right;
	    margin-right: 200px;
	    margin-top: -35px;
	   padding: 5px;
	   text-align: center;
	   cursor: pointer;
}
.submit22:hover{
  background-color: red;
  color: #fff;
}

.btn{
	padding: 5px;
	cursor: pointer;
}
	</style>

</head>

<body>
	<!--Header--->
	<header></header>

	<!--Menu-->
     <nav class="menu-h">
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./cardapio.php">Receitas</a></li>
            <li><a href="./sobre.php">Sobre Nós</a></li>
            <li><a href="./contato.php">Contatos</a></li>
            <li><a href="./dicas.php">Dicas/Fotos</a></li>
            <li><a href="./localizacao.php">Localização</a></li>
            <li><a href="./login.php">Login</a></li>	
             <form action="busca.php" method="POST" class="busca"><input name="pesquisar" type="text" class="input22" placeholder="Pesquise um sabor aqui">
            <input type="submit" class="submit22" name="btn" value="Pesquisar"></form>
        </ul>
    
     </nav><br></br>
	 <?php
//Sessão
session_start();
if(isset($_SESSION['mensagem'])):
	echo $_SESSION['mensagem'];
endif;
session_unset();
?>
	 <!-----Contate-nos--->
				<div class="right-side">
				<div class="topic-box">
				<h2>CONTATE-NOS</h2>
				<p>Para suporte inclua na mensagem o número do seu pedido e a data!</p><br>

					<form action="enviar.php" method="POST">
						<div class="field">
							<label class="label">Nome</label>
							<div class="control">
								<input name="nome" class="input1" type="text" placeholder="Seu nome">
							</div>
						</div><br>

						<div class="field">
							<label class="label">E-mail *</label>
							<div class="control">
								<input name="email" class="input1" type="email" placeholder="Seu email">
							</div>
						</div><br>

						<div class="field">
							<label class="label">Assunto</label>
							<div class="control">
								<div class="select">
									<select name="assunto" class="input2">
										<option>Suporte</option>
										<option>Sugestão</option>
										<option>Outro</option>
									</select>
								</div>
							</div>
						</div><br>

						<div class="field">
							<label class="label">Mensagem *</label>
							<div class="control">
								<textarea name="mensagem" class="input3" placeholder="Deixe sua mensagem" maxlength="2000" cols="60" rows="3"></textarea>
							</div>
						</div><br>
						
						<div>
						  <button style="background-color: yellow; color: rgb(121,44,44); border: none;" class="btn">Enviar</button>
						</div>

					</form>
				</div>
</div>

<!--Footer-->
   <footer class="footer-pagina">
        <div class="grupo-2">
            <small>&copy;2022 <b>Projeto Integrador/SENAC</b> - Todos os direitos reservados.</small>
        </div>
    </footer>  
</body>
</html>