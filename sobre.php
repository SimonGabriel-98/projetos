
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="./IMG/teste_icone2.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/sobre.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <style type="text/css">
        .input1{
          float: right;
           margin-right: 280px;
            margin-top: -35px;
           padding: 3px;
           text-align: center;
           border-radius: 0%;
        }
        .submit12{
    float: right;
     margin-right: 200px;
    margin-top: -35px;
   padding: 5px;
   text-align: center;
   cursor: pointer;
    
}
.submit12:hover{
  background-color: red;
  color: #fff;
}


    </style>
</head>
<body>
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
    <div class="main-menu">
        <ul>
            <li><a href="https://web.whatsapp.com/" target="_blank"><img src="img/w.png" alt="whatsapp" ></a></li>
            <li><a href="https://www.instagram.com/invites/contact/?i=tdeym4edfnyo&utm_content=nickxkd" target="_blank"><img src="img/i.png" alt="instagram"></a></li>
            <li><a href="https://www.facebook.com/Pizzaria-Bom-Sabor-103026112310396/" target="_blank"><img src="img/f.png" alt="facebook"></a></li>
            
        </ul>
    </div>
    
    <!--Sobre-->
    <div class="sobre">
        <h2>Nossa História</h2><br>
        <h3>Desde 2011</h3><br>
        <img src="./IMG/história.jpg">

        <p>Fundada em 2011 e considerada a melhor pizzaria da Bahia<br>
           A Pizzaria Bom Sabor, nasceu da paixão por gastronomia e<br>
           vontade de levar felicidade ao dia dos bahianos.<br>
           Ao longo da nossa história conquistamos os paladares mais exigentes.<br>
           Criamos receitas cheias de personalidade e sabor. Os nossos produtos<br>
           são naturais e rigorosamente selecionados, para assim levar qualidade<br>
           e confiança até sua mesa.           
        </p><br></br>

        <div class="box-2">
            <h3> É um prazer ter vocês conosco!</h3>
            <img src="./IMG/história 2.jpg">
            <p>Somos consideredos referência nos sabores de pizzas.<br><br>
               <b>Misão:</b> Levar felicidade e confiança em forma de pizza.<br>
               <b>Visão:</b> Crescimento da marca e satisfação dos clientes.<br>
               <b>Valores:</b> Respeito, Humildade, Dedicação e Satisfação.<br>
           </p>
        </div><br></br></br>

    </div><br></br></br>

    <!--Footer-->
    <footer class="footer-pagina">
        <div class="grupo-2">
            <small>&copy;2022 <b>Projeto Integrador/SENAC</b> - Todos os direitos reservados.</small>
        </div>
    </footer>
</body>
</html>