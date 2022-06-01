<?php    
	include_once("conexao.php");

	// as variáveis nome e senha recebem os dados digitados na página de login
    $nome_usuario = addslashes($_POST['nome']); 
    $senha_usuario = addslashes($_POST['senha']);

    //Para testar a chegada de dados
    echo "Nome inserido: ".$nome_usuario."<br /> <br />";
	echo "Senha inserida: ".$senha_usuario;

	//Verificar se os dados existem na base de dados
	/*$sql ="SELECT * FROM `funcionario` WHERE `nome_funcionario`='$nome_usuario' AND `senha_funcionario`='$senha_usuario'";
	$verifica = mysqli_query($conectar, $sql); // ver se o usuario existe
	
	//Associa os dados do usuario
	$dados_usuario = mysqli_fetch_assoc($verifica);
		
	if(mysqli_num_rows($verifica) <=0){
       header("Location: ../erro0.php");
	}else{
 		
		session_start();

		header("Location: ../pagina_inicial.php");
	}
	*/
?>