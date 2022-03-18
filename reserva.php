  <?php
  session_start();
    //verificar se a pessoa esta logada
    if(!isset($_SESSION['id_usuario']))//se nn tiver cetado essa variavel global, é pq a pessoa nn esta logada
    {   //não estando ela sera redirecionada para página login
        header("Location: login.php");
        exit;
    }
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <link rel="shortcut icon" href="./IMG/teste_icone2.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <style type="text/css">
        *{
    margin: 0;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
body {
    background-color: rgb(121,44,44);
}
header {
    background-image: url(./img22.jpg);
    height: 90px;
    box-shadow: 0px 5px wheat;
}
h1 {
    text-align: center;
    color: white;
}
h3 {
    display: flex;
    text-align: center;
    margin: 60px 450px 50px 450px;
    color: white;
    box-shadow: 2px 2px 2px 3px white;
    padding: 0px 40px;
    justify-content: center;
}
p {
    font-weight: bold;
    color: white;
    text-align: center;
}
/*Voltar*/
.voltar ul li{
    float: right;
    list-style-type: none;
    text-decoration: none;
    padding: 10px;
}
.voltar ul li a{
    color: white;
    background-color: red;
    list-style-type: none;
    text-decoration: none;
    padding-right: 10px;
    border-radius: 4px;
}
/*IMG*/
.centro img{
    width: 800px;
    height: 400px;
    border-radius: 10px;
    margin: 20px 250px;

}
/*Reserva*/
.item {
    background-color: wheat;
    color: darkred;
    text-align: left;
    padding: 40px 50px;
    margin: 75px 400px;
    border-radius: 20px;
}
.btn {
    background-color: yellow;
    display: inline-block;
    text-align: center;
    font-size: 15px;
    padding: 8px 12px;
    margin: 0px 100px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    border: none;
}
.btn a{
    text-decoration: none;
    list-style: none;
    color: darkred;
}
/*Footer*/
.footer-pagina{
    width: 100%;
    background-color: #757673;
    /*position: fixed;*/
    bottom: 0;
}
.footer-pagina .grupo-2{
    background-color: wheat;
    padding: 15px 10px;
    text-align: center;
    color: red;
}


    </style>
</head>
<body>
    <a href="principal.php"><header></header></a><br><br>

    <!---VOLTAR-->
<!--<nav class="voltar">
    <ul>
        <li><a href="#">Voltar para Home</a></li>
    </ul>
</nav><br>-->

<!--IMG-->
<div class="centro">
    <center><img src="./IMG/4.jpg"></center>
</div>

<h3>Reserva de Mesas</h3>
    <!--Reserva-->
    <p>Clientes sem reserva também são bem-vindos!<br>
        Aceitamos reservas com um número limitado de 15 mesas com capacidade para 4 pessoas cada.<br><br></br>
        <button class="btn" type="submit"><a href="https://web.whatsapp.com/send?phone=5511920108416" target="_blank">CLIQUE AQUI PARA FAZER A SUA RESERVA</a></button>
      </p><br></br>
     
    <!--Footer-->
    <footer class="footer-pagina">
    <div class="grupo-2">
        <small>&copy;2022 <b>Projeto Integrador/SENAC</b> - Todos os direitos reservados.</small>
    </div>
</footer>
    
</body>
</html>