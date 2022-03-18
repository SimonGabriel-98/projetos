<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="CSS/estilodicas.css">
    <link rel="shortcut icon" href="./IMG/teste_icone2.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicas</title>
    <style type="text/css">
   .input1{
  float: right;
  margin-right: 280px;
  margin-top: -36px;
 padding: 5px;
 text-align: center;
 border-radius: 0%;
}
.submit12{
    float: right;
    margin-right: 200px;
    margin-top: -35px;
   padding: 5px;
   text-align: center;
}
.submit12:hover{
    background-color: red;
    color: #fff;
}
    </style>

</head>
<body>
    <!---Logo-->
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
            <form action="busca.php" method="POST" class="busca"><input name="pesquisar" type="text" class="input1" placeholder="Pesquise um sabor aqui">
            <input type="submit" class="submit12" name="btn" value="Pesquisar"></form>
        </ul>
    
     </nav><br></br>

    <!--Principal-->
    <h3>Dicas de Sabores</h3><br>

    <div class="sabores">
    <div class="item">
    <h2>Sabores de Pizzas Tradicionais</h2><br><br>
    <p>São sabores mais clássicos. Muitas pessoas preferem pedir sempre os mesmos sabores,
        por isso listamos os sabores de pizzas mais pedidos por nossos clientes.
    </p><br></br>
    <img src="./IMG/tradi.JPG">
    </div><br></br>

    <div class="item">
    <h2>Sabores de Pizzas Vegetarianas</h2><br></br>
    <p>Como somos uma pizzaria para todos os gostos, também preparamos pizzas para quem não consome
        carnes, as mais compradas por nossos clientes estão listadas no grafico abaixo.
    </p><br></br>
    <img src="./IMG/sabores vegetarianos.JPG">
    </div><br></br>

    <div class="item">
    <h2>Sabores de Pizzas Doces</h2><br></br>
    <p>Normalmente acompanha as pizzas salgadas, como se fosse uma especíe de sobremesa.
    A variedade está cada vez maior, veja abaixo as favoritas dos nossos clientes.
    </p><br></br>
    <img src="./IMG/sabores doces.JPG">
    </div>
    </div><br></br>

    
    <h3>Dicas de Combinações</h3><br></br>

   <div class="sabores">
    <div class="item">
     <h2>Pizza com dois sabores</h2><br>
     <p>Pensando que cada pessoa tem seu gosto, vendemos as pizzas também com mais de um sabor,
        assim todos podem escolher. Nossa dica hoje é a pizza meia calabresa e meia muçarela.
     </p>
     <img src="./IMG/pizza meia calabresa.jpg">
    </div>

    <div class="item">
        <h2>Combos com dois sabores</h2><br>
        <p>Uma boa dica é pedir um sabor tradicional e outro doce como se fosse uma sobremesa.
            Hoje trouxemos a combinação da pizza de bacon e a pizza de chocolate.
        </p>
        <img src="./IMG/combinacao1.jpg">
    </div>
    </div><br>

    <!--Fotos-->
    <h3>Fotos do Nosso Ambiente</h3><br></br>

  
    <div class="fotos">
    <div class="item-2">
        <h2>Espaço Climatizado</h2><br>
        <p>Espaço amplo e climatizado, pronto para receber você e sua família ou amigos.</p><br>
        <img src="./IMG/amb1.jpg"><br>
    </div>

    <div class="item-2">
        <h2>Espaço Bom Sabor</h2><br>
        <p>Esse espaço tem capacidade para até 50 pessoas. Reserve para eventos e faça sua festa
            com conforto e qualidade.</p><br>
        <img src="./IMG/amb2.jpg"><br>
    </div>

    <div class="item-2">
        <h2>Adega de Vinhos</h2><br>
        <p>A união perfeitas das nossas pizzas com os mais de 500 rótulos de vinhos, com opções
            nacionais e importadas.
        </p><br>
        <img src="./IMG/amb3.jpg"><br>
    </div>
    </div><br>
    
    <!--Footer-->
    <footer class="footer-pagina">
        <div class="grupo-2">
            <small>&copy;2022 <b>Projeto Integrador/SENAC</b> - Todos os direitos reservados.</small>
        </div>
    </footer>

    
</body>
</html>