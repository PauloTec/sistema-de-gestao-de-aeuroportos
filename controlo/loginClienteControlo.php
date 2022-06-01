<?php 
	//chamar ficheiro que conecta a base de dados
	include_once("conexao.php");

	//buscar variaveis que estão no formulario html
	$nome_usuario = addslashes($_POST['nome']); 
	$senha_usuario = addslashes($_POST['senha']);

	//Para testar a chegada de dados
    echo "Nome Cliente: ".$nome_usuario."<br /> <br />";
	echo "Senha Cliente: ".$senha_usuario;

	//Verificar se os dados existem na base de dados
	$sql ="SELECT * FROM `cliente` WHERE `nome_cliente`='$nome_usuario' AND `senha_cliente`='$senha_usuario'";
	
	$verifica = mysqli_query($conectar, $sql); // ver se o usuario existe
			
	if(mysqli_num_rows($verifica) <=0){
       header("Location: ../erro0.php");
	}else{
 		//Associa os dados do usuario
		$dados_usuario = mysqli_fetch_assoc($verifica);
		
		session_start();

		//pegar o nome do usuario para reconhecer sessão nos serviços
        $_SESSION['nome'] = $nome_usuario;

		header("Location: ../servicos.php");
	}