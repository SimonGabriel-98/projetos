<?php

Class Usuario
{  	private $pdo;
	public $msgErro = "";//
	//parametros exigidos no PDO
	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
	}
}

	public function cadastrar($nome, $telefone, $email, $senha)
	{
		global $pdo;
		//verificar se já existe o email cadastrado// selecione do banco a coluna id_usuario da tabela usuarios onde o email é igual ao email que a pessoa digitou// 
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :email");
		$sql->bindValue(":email",$email);
		//linha abaixo(execução do comando de cima)
		$sql->execute();
		//verificar se o comando a cima retorna algo 
		if($sql->rowCount() > 0)// se rowCaunt for maior que zero(se veio id do usuario) ela ja tem cadastro
		{
			
			return false;//se retornar falso, ja esta cadastrada nn pode cadastrar novamente 
		}else{
			//se nn veio nenhum id, então Cadastre
			$sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:nome, :telefone, :email, :senha)");
			$sql->bindValue(":nome",$nome);
			$sql->bindValue(":telefone",$telefone);
			$sql->bindValue(":email",$email);
			$sql->bindValue(":senha",md5($senha));
			$sql->execute();//execução do comando a cima
			return true; //se retornar verdadeiro, cadastrou com sucesso
		}
		
	}
		
	public function logar($email, $senha)
	{
		global $pdo;
		//verificar se o email e senha estão cadastrados, se sim
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :email AND senha = :senha");//selecione o id da tabela usuarios onde :e e :s sejam o msm que esta no banco de dados
		$sql->bindValue(":email",$email);//:e que será subistituido pelo $email do parâmetro
		$sql->bindValue(":senha",md5($senha));// e :s por $senha
		$sql->execute();//execução do código acima
		if($sql->rowCount() > 0)//verificar se todos os dados dessa consulta for maior que 0, entt se veio um id é pq a pessoa está cadastrada
		{
			//entrar no sistema (sessão)
			$dado = $sql->fetch();//fetch transforma tudo que vem do bd em array
			session_start();// estartando a sessão
			$_SESSION['id_usuario'] = $dado['id_usuario']; //criando uma variavel global id_usuario que irá guardar o dado da coluna id_usuario que veio da consulta, o id do usuario que acabou de logar estará armazenado na sessão
			return true;//logado com sucesso
		}else{

			return false;//não foi possivel logar
		}

	}

}


?>