<?php    
	include_once("conexao.php");

	/* DADOS VINDOS DO FORMULÁRIO */		
    $nome = trim(strip_tags(addslashes($_POST['nome']))); // atribui à variavel, com funções contra sql inject 
	$genero = $_POST['genero'];
	$dataNascimento = $_POST['data_nascimento'];

	$morada =  trim(strip_tags(addslashes($_POST['morada'])));
	$nacionalidade =  trim(strip_tags(addslashes($_POST['nacionalidade'])));
	$email =  trim(strip_tags(addslashes($_POST['email'])));

	$telefone =  trim(strip_tags(addslashes($_POST['telefone'])));
    $senha = trim(strip_tags(addslashes($_POST['senha'])));
       
    $data_cadastro = date('d/m/y');
    
    //Código para encontrar a idade do usuário
    $data = explode("-",$dataNascimento);
    $anoNasc    = $data[0];
    $mesNasc    = $data[1];
    $diaNasc    = $data[2];

    $data1 = explode("-",$data_cadastro);

    $anoAtual   = date("Y");
    $mesAtual   = date("m");
    $diaAtual   = date("d");

    $idade = $anoAtual - $anoNasc;

	/*echo "<br />";
	echo "Ano - ".$anoNasc;

	echo "<br />";
	echo "Ano 2 - ".$anoAtual;

	echo "<br />";
	echo "Idade - ".$idade;

	echo "<br />";
	*/

	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "{$email}: Email válido"."<br>";
    }
    else {
        echo "{$email}: ERRO - Email inválido"."<br>";
    }

	//Se for maior de 18 anos gravar, do contrário dar erro!
	if ($idade >= 18) {
		//zona da inserção na base de dados
		$sql = "INSERT INTO `cliente`(`id_cliente`, `nome_cliente`, `genero_cliente`, `data_nasc_passageiro`, `morada_cliente`, `nacionalidade_cliente`, `email_cliente`, `telefone_cliente`, `senha_cliente`, `data_cadastro_cliente`) 
		VALUES 
		(NULL,'$nome','$genero','$dataNascimento','$morada','$nacionalidade','$email','$telefone','$senha','$data_cadastro')";
	
		//se não ocorrer erro então...
		$dados = mysqli_query($conectar,$sql);

		if ($dados){	
			session_start();

			//pegar o nome do usuario para reconhecer sessão nos serviços
        	$_SESSION['nome'] = $nome;
				
			header("Location: ../servicos.php");
		}else{
			//se não gravar com sucesso...
			echo '<h3> Erro ao cadastrar, <a href="../index.php"> Tente novamente </a> </h3>';
		} 	
	} else {
		echo "ERRO AO GRAVAR, CLIENTE NÃO TEM IDADE ADULTA!";
	}
	
?>