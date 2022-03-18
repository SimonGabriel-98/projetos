<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./CSS/loca.css.css">
    <link rel="shortcut icon" href="./IMG/teste_icone2.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localização</title>
    <style type="text/css">
      
      .input1{
  float: right;
  margin-right: 280px;
  margin-top: -36px;
 padding: 5px;
 text-align: center;
 border-radius: 0%

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

.reserva{
  padding: 2px;
  border-radius: 3%;
}

.reserva:hover{
  background-color:red;
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
    </nav>

    <!--Localização-->
    <main>
        <h2>Que tal uma visitinha?</h2> <a href="reserva.php"><button class="reserva">Faça ja a sua reserva!!</button></a><br><br>
        <br>
        
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15550.027444632795!2d-38.4588637!3d-13.0033622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x40f812539992941c!2sPizzaria%20Bom%20Sabor!5e0!3m2!1spt-BR!2sbr!4v1640820596821!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     
  </main>
     
    <br></br></br>

    <!--Footer-->
    <footer class="footer-pagina">
        <div class="grupo-2">
            <small>&copy;2022 <b>Projeto Integrador/SENAC</b> - Todos os direitos reservados.</small>
        </div>
    </footer>
    
</body>
</html>