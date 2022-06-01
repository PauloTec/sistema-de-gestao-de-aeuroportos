<?php    
	include_once("conexao.php");

	// as variáveis nome e senha recebem os dados digitados na página de login
    $nome_usuario = addslashes($_POST['nome']); 
    $senha_usuario = addslashes($_POST['senha']);

    //Para testar a chegada de dados
    echo "Nome Funcionario: ".$nome_usuario."<br /> <br />";
	echo "Senha Funcionario: ".$senha_usuario;

	//Verificar se os dados existem na base de dados
	$sql ="SELECT * FROM `funcionario` WHERE `nome_funcionario`='$nome_usuario' AND `senha_funcionario`='$senha_usuario'";
	$verifica = mysqli_query($conectar, $sql); // ver se o usuario existe
	
	//Associa os dados do usuario
	$dados_usuario = mysqli_fetch_assoc($verifica);
		
	if(mysqli_num_rows($verifica) <=0){
       header("Location: ../admin.php");
	}else{
 		//verificar categoria do funcionario

 		//se for supervisor admin aparece com mais opções - admin 2

 		//se for normal, abre a página - admin
 		
		session_start();

		header("Location: ../admin.php");
	}
	
?>
