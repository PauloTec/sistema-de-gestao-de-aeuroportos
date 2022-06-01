<?php 
	include_once("conexao.php");
	
	/*--------------------------------------------	
	DADOS VINDOS DO FORMULÁRIO
	---------------------------------------------*/

	$nome = trim(strip_tags($_POST['nome'])); // atribui à variavel, com funções contra sql inject
	$genero = $_POST['genero'];
	$telefone = trim(strip_tags($_POST['telefone']));

	$morada = trim(strip_tags($_POST['morada']));
	$pass = trim(strip_tags($_POST['senha'])); 
	
	$data_cadastro = date("Y/m/d");
	//$categoria =$_POST['categoria'];
	   
	//Para testar a chegada de dados
    echo "Nome inserido: ".$nome."<br /> <br />";
    echo "genero: ".$genero."<br /> <br />";
    echo "telefone: ".$telefone."<br /> <br />";
    echo "morada: ".$morada."<br /> <br />";
	echo "Senha inserida: ".$pass;
	  	
	// zona da inserção na base de dados
	$sql = "INSERT INTO `funcionario`(`id_Funcionario`, `nome_funcionario`, `Data_nasc_funcionario`, `genero_funcionario`, `telefone_funcionario`, `morada_funcionario`, `senha_funcionario`, `Categoria_funcionario_id`) 
		VALUES 
		(NULL,'$nome',NULL,'$genero','$telefone','$morada','$pass',1)";

	//se não ocorrer erro então...
	$data = mysqli_query($conectar,$sql);

	if ($data){	
		header("Location: ../servicos2.php");
	}else{
		//se não gravar com sucesso...
		echo '<h3> Erro ao cadastrar, <a href="../index.php"> Tente novamente </a> </h3>';
	}			
?>



