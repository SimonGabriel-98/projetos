<title>Resultado da Busca</title>
   <style>
   	*{
   		margin: 0;
   		padding: 0;
   	}
		body{
			  background-image: linear-gradient(to right, transparent 0%, black 90%), url(./IMG/bacground.jpg);
           height: 100vh;
           width: 100vw;

		}
		header{
			background-image: url(./img22.jpg);
			height: 90px;
			box-shadow: 0px 3px yellow;
		}
		h2{
			text-align: center;
			color: white;
			font-size: 1.8em;
			 font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
		
	</style>

    <a href="principal.php"><header></header></a><br></br></br></br></br>
	<h2>Resultado da Busca:</h2>
<?php
$servidor ="localhost";
$usuario = "root";
$senha = "";
$dbname = "pizzaria_login";

//Criar Conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$pesquisar = $_POST['pesquisar'];
$result_busca = "SELECT * FROM busca WHERE nome LIKE '%$pesquisar%'";

$resultado_busca = mysqli_query($conn, $result_busca);

while($rows_busca = mysqli_fetch_array($resultado_busca)) {
	echo"<br><center><div style='color: white'>".$rows_busca['nome']."&nbsp - ".$rows_busca['descricao']."&nbsp - R$ ".$rows_busca['preco']."&nbsp"."</div>"."</center>"."<br>";
}
?>