
<?php 
require_once 'CLASSES/usuarios.php';
$u = new Usuario;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="./IMG/teste_icone2.jpg" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <style type="text/css">  

.input1{
  float: right;
  margin-right: 280px;
  margin-top: -35px;
 padding: 5px;
 text-align: center;
 border-radius: 0%
}
.submit13{
    float: right;
    margin-right: 200px;
    margin-top: -35px;
   padding: 5px;
   text-align: center;
   cursor: pointer;
}
.submit13:hover{
    background-color: red;
    color: white;
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
            <input type="submit" class="submit13" name="btn" value="Pesquisar"></form>
        </ul>
    
     </nav>

    <!--Main-->
    <div class="rede-social">
        <a href="https://www.facebook.com/Pizzaria-Bom-Sabor-103026112310396/" target="_blank"><i class="fab fa"><img src="img/f.png" alt="facebook"></i></a>
        <a href="https://web.whatsapp.com/" target="_blank"><i class="fab fa"><img src="img/w.png" alt="whastsApp"></i></a>
        <a href="https://www.instagram.com/invites/contact/?i=tdeym4edfnyo&utm_content=nickxkd" target="_blank"><i class="fab fa"><img src="img/i.png" alt="instagram"></i></a>
    </div>
    <div class="login">
        <h3>Bem-Vindo a Pizzaria Bom Sabor,<br>
            Efetue o Login para acessar seus pedidos.<br>
            Ainda não é cadastrado? <a href="./cadastrar.php">Cadastre-se</a>
        </h3><br>

        <form method="POST">
        <b>Login:</b>
        <input type="email" class="input2" name="email" placeholder="Digite o e-mail"><br></br>

        <b>Senha:</b>
        <input type="password" class="input2" name="senha" placeholder="Digite a senha"><br></br>

        <div class="button">
        <input type="submit" value="Acessar">
        <p>Esqueceu a senha?</p>
        <button><a href="#modal-one" class="btnn-btn-big">Recuperar Acesso</a></button>
        </div>
        <!-- Btn abre Modal -->
<div class="wrap">
 
</div>
<!-- Janela Modal -->
<div class="modal" id="modal-one" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-header">
      <h2>Pedimos desculpas pelo transtorno! &#x1F622;</h2>
            <a href="#" class="btn-close" aria-hidden="true">×</a>
    </div>
    <div class="modal-body">
      <p>Pedimos a sua coompreensão... a operação de resgate de senha está em manutenção, logo em breve será possível acessar a página.</p><br>
      <p>Abraços! - Equipe&copy;SuporteTécnico &#x1F970;</p>
    </div>
    <div class="modal-footer">
      <a href="login.php" class="btn">Ok!</a>
    </div>
  </div>
</div>
</form>
    </div><br></br>
<?php

    //verificar se o usuário clicou no botão
if(isset($_POST['email'])){
    $email = addslashes($_POST['email']); //addslashes impede que mal intencionados enviem códigos dentro do formulario e façam estragos, ele tira qualquer comando malicioso
    $senha = addslashes($_POST['senha']);
    //verificar se todos os campos foram preenchidos
    if(!empty($email) && !empty($senha))//!empty($email)= se nn está vazio a variavel nome e assim por diante
    {
        $u->conectar("pizzaria_login", "localhost", "root","");
            if($u->msgErro == "")
            {
            if($u->logar($email,$senha))
            {
                header("Location: carrinho-de-compra-procedural-master/index.php");

            }else{
                ?>
                <div class="msg-erro">
                <?php echo'<script>alert("Email ou senha incorretos!")</script>'?>
                </div>
                <?php
            }
        }else{
           ?>
           <div class="msg-erro">
           <?php echo "Erro: ".$u->msgErro; ?>
            </div>
            <?php
        }
    }else{
        ?>
         <div class="msg-erro"> 

            <?php echo '<script>alert("Preencha todos os campos!")</script>'?>
         </div>
         <?php     
    }
}
?>
    <!--Footer-->
    <footer class="footer-pagina">
        <div class="grupo-2">
            <small>&copy;2022 <b>Projeto Integrador/SENAC</b> - Todos os direitos reservados.</small>
        </div>
    </footer>
    
</body>
</html>