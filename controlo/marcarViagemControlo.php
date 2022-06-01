<?php 
include_once("conexao.php");

$nome = $_POST['nome']; // atribui à variavel, com funções contra sql inject 
$num_voo = $_POST['numero_voo'];
$data_voo = $_POST['data_voo'];

$aviao = $_POST['aviao'];
$origem_voo = $_POST['origem_voo'];
$destino_voo = $_POST['destino_voo'];

$aeroporto = $_POST['aeroporto'];
$funcionario = $_POST['funcionario'];

// Comparando as Datas
$data_de_hoje = date('Y-m-d',  strtotime("now"));

//se a data for acima da data de hoje então pode reservar
if ($data_voo > $data_de_hoje) {
	$sql = "INSERT INTO `voo`(`id_voo`, `numero_voo`, `data_voo`, `origem_voo`, `destino_voo`, `aeroporto_id`, `funcionario_id`, `cliente_id`, `aviao_id`) 
	VALUES (NULL,'$num_voo','$data_voo','$origem_voo','$destino_voo','$aeroporto','$funcionario','$nome', '$aviao')";

	//se não ocorrer erro então...
	$data = mysqli_query($conectar,$sql);

	if ($data){	
		//Associa os dados do usuario
		$dados_usuario = mysqli_fetch_assoc($data);

		$encontrar_funcionario = "SELECT * FROM `funcionario` WHERE `id_Funcionario`='$funcionario'";
		$encontrar_funcionario1 = mysqli_query($conectar, $encontrar_funcionario);  
		$func = mysqli_fetch_assoc($encontrar_funcionario1);

		session_start();

	//pegar o nome do usuario para reconhecer sessão nos serviços
		$_SESSION['nome'] = $clientes['nome_funcionario'];

		header("Location: ../admin.php");
	}else{
		//se não gravar com sucesso...
		echo '<h3> Erro ao eservar viagem, <a href="../index.php"> Tente novamente </a> </h3>';
	}
	 		
} else {
	header("Location: ../erroReserva.php");
}

?>