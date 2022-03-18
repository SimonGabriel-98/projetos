<?php 	
    session_start();
    //verificar se a pessoa esta logada
    if(!isset($_SESSION['id_usuario']))//se nn tiver cetado essa variavel global, é pq a pessoa nn esta logada
    {   //não estando ela sera redirecionada para página login
        header("Location: ../login.php");
        exit;
    }
	require_once "functions/product.php";
	$pdoConnection = require_once "connection.php";
	$products = getProducts($pdoConnection);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pedidos</title>
    <link rel="shortcut icon" href="./IMG/teste_icone2.jpg" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
	<meta charset="utf-8">
	<style type="text/css">
		    *{
    margin: 0;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
body {
    background-color: rgb(121,44,44);
}
h1 {
    text-align: center;
    color: white;
}
		.cardapio{
    display: flex;
    flex-direction: row;
    justify-content: center;

}
.cardapio img {
    padding: 5px;
    width: 150px;
    height: 100px;
    border-radius: 30px;
}
.item {
    display: flex;
    flex-direction: column;
    text-align: center;
    color: darkred;
    background-color: #dddeaf;
    margin: 10px;
    padding: 15px;
    border-radius: 10px;
}
div{

margin-bottom: 2px;

}
p{
	font-size: 1em;
}
.aviso{
	color: #fff;
	text-align: center;
}
a{
    color: #007bff;
    text-decoration: none;
    background-color: transparent;

}
   button{
   			color: #fff;
            background-color: yellow;
            padding: 3px 3px;
            margin: 2px;
            margin-bottom: 2px;
            border-radius: 20% 3px;
            cursor: pointer;
        }

.sai{
	font-size: 1rem;
}
.btn-btn-primary{
	        background-color:  #dddeaf;
	        padding: 3px 3px;
            margin: 2px;
            margin-bottom: 2px;
            border-radius: 30% 3px;
            cursor: pointer;
          
}

/*Footer*/

.grupo-2{
    background-color: wheat;
    padding: 15px 10px;
    text-align: center;
    color: red;
}

	</style>

</head>
<body>
	<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="carrinho.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i>&#x1F355;Sua Página de Pedidos
            </h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="carrinho.php" class="nav-item nav-link active">
                    <h5 class="px-5-cart">
                        <i class="fas-fa-shopping-cart"></i>&#x1F6D2; Carrinho
                        <span id="cart_count" class="text-warning bg-light">0</span>                  
                         </h5>
                           <button type="submit" class="sair"><a class="sai" href="../sair.php">Sair</a></button> 
                </a>
            </div>
        </div>

    </nav>
    </header><br></br>
 <h1>Sabores disponiveis para compra!</h1>
    <p class="aviso"><em>Pizzas brotinho só vendemos direto no estabelecimento</em></p><br></br>
    <main>
	<div class="container">
		
			<div class="cardapio">
				 <div class="row">
			<?php foreach($products as $product) : ?>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							 <h4 class="card-title"><?php echo $product['nome']?></h4>
					        <div class="item">
                                <img src="<?php echo $product['imagem'] ?>">
							  	  <p>Tamanho Familía
							  	  R$<?php echo number_format($product['preco'], 2, ',', '.')?></p>
					            <p>Brotinho: R$ 21,90</p>
					        </div>
							 <a class="btn-btn-primary" href="carrinho.php?acao=add&id=<?php echo $product['id']?>" class="card-link">Comprar&#x1F6D2;</a>

						</div>
					</div>
				</div>
			<?php endforeach;?>
		</div>
</main>
<footer>
     <div class="grupo-2">
            <small>&copy;2022 <b>Projeto Integrador/SENAC</b>- Todos os direitos reservados.</small>
        </div>
    </footer>
</body>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</html>