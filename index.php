<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <link rel="shortcut icon" href="./IMG/teste_icone2.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="CSS/principal.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Bom Sabor</title>
<style type="text/css">
.input1{
  float: right;
  margin-right: 280px;
  margin-top: -35px;
 padding: 5px;
 text-align: center;
 border-radius: 0%
}
.submit1{
    float: right;
    margin-right: 200px;
    margin-top: -35px;
   padding: 5px;
   text-align: center;
   cursor: pointer;
}
.submit1:hover{
  background-color: red;
  color: #fff;
}


.rede-social a{
    display: inline-block;
    text-decoration: none;
    width: 45px;
    height: 45px;
    line-height: 45px;
    color: red;
    margin-left: 40px;
    text-align: center;
    transition: all 300ms ease;
}
 .rede-social a:hover{
    color: rgb(2, 3, 3);
    background-color: wheat;
   
}
.rede-social{
    background-color: rgb(121, 44, 44);
    padding: 15px 10px;
    text-align: center;
    border-top: 2px solid yellow;
}
</style>
</head>
<body>
    <!--Cabecalho-->
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
            <input type="submit" class="submit1" name="btn" value="Pesquisar"></form>
        </ul>
    </nav>


    <!--Main Galeria-->
    <section class="galeeria">
        <img class="foto" src="./IMG/4.jpg">
        <img class="foto" src="./IMG/1.jpg">
        <img class="foto" src="./IMG/2.jpg">
        <img class="foto" src="./IMG/3.jpg">
        
    </section>

    <!--Cardapio-->
    <h3>Nossas Pizzas Mais Vendidas</h3>
    <div class="cardapio">

        <div class="item">
            <h2>Pizza de Calabresa</h2><br>
            <img src="./IMG/pizza meia calabresa.jpg"><br>
            <p>Tamanho Familía: R$ 28,00</p>
            <p>Brotinho: R$ 19,90</p>
        </div>

        <div class="item">
            <h2>Pizza Portuguesa</h2><br>
            <img src="./IMG/pizza portuguesa.jpg"><br>
            <p>Tamanho Familía: R$ 25,00</p>
            <p>Brotinho: R$ 21,90</p>
        </div>

        <div class="item">
            <h2>Pizza Quatro Queijos</h2><br>
            <img src="./IMG/pizza quatro queijos.jpg"><br>
            <p>Tamanho Familía: R$ 28,00</p>
            <p>Brotinho: R$ 21,90</p>
        </div>
    </div><br>

    <!--Delivery-->

    <h3>Delivery Bom Sabor</h3>
    <div class="entrega">
        <div class="delive">
            <h2>Ligue para (77)3243-0001</h2><br>
            <img src="./IMG/delivery.jpg"><br>
            <p>Fazemos delivery. Ligue agora e peça uma pizza para receber no conforto do seu lar!<br>
               A Pizzaria Bom Sabor tem receitas exclusivas, feita com muito amor para deixar o seu<br> dia ainda mais especial.
            </p>
        </div>
    </div><br>

    <!--Footer-->
    <footer class="footer-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                        <img src="./IMG/pizzaria.logo.jpg">
                </figure>
            </div>

            <div class="box">
                <h2>HORÁRIOS DE FUNCIONAMENTO:</h2>
                <ul class="list">
                    <li>Segunda: Fechado</li>
                    <li>Terça: 18:00 ás 21:00</li>
                    <li>Quarta: 18:00 ás 21:00</li>
                    <li>Quinta: 18:00 ás 21:00</li>
                    <li>Sexta: 18:00 ás 23:00</li>
                    <li>Sabado: 18:00 ás 23:00</li>
                    <li>Domingo: 18:00 ás 23:00</li>
                </ul>

                <h2>CONTATOS:</h2>
                <p>WhastsApp: (77)99999-0909<br>
                Duvidas/Sugestões: (77)99090-0001<br></p>
            </div>

            <div class="box">
                <h2>ENDEREÇO:</h2><br>
                <p>Rua: Amazonas - Pituba<br> Cep: 41830-380<br>
                    (Salvador-BA)</p><br></br><br>

                <h2>NOSSAS REDES SOCIAIS:</h2><br>
                <div class="rede-social">
                    <a href="https://www.facebook.com/Pizzaria-Bom-Sabor-103026112310396/" target="@blank"><i class="fab fa"><img src="./IMG/f.png" alt="facebook"></i></a>
                    <a href="https://web.whatsapp.com/" target="@blank"><i class="fab fa"><img src="./IMG/w.png"></i></a>
                    <a href="https://www.instagram.com/invites/contact/?i=10aco8arie60v&utm_content=nickxkd" target="@blank"><i class="fab fa"><img src="./IMG/i.png" alt="instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="grupo-2">
            <small>&copy;2022 <b>Projeto Integrador/SENAC</b>- Todos os direitos reservados.</small>
        </div>
    </footer>
</body>
</html>