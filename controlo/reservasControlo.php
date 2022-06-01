<?php 
include_once("conexao.php");

// atribui à variavel, com funções contra sql inject 
$usuario = $_POST['usuario'];

$data_voo = $_POST['data_voo'];
$aeroporto = $_POST['aeroporto'];

$origem_voo = $_POST['origem_voo'];
$destino_voo = $_POST['destino_voo'];

// Comparando as Datas
$data_de_hoje = date('Y-m-d',  strtotime("now"));

//se a data for acima da data de hoje então pode reservar
if ($data_voo > $data_de_hoje) {
	$sql = "INSERT INTO `reserva`(`id_reserva`, `data_voo`, `origem_voo`, `destino_voo`, `cliente_nome`, `aeroporto_nome`) VALUES (NULL,'$data_voo','$origem_voo','$destino_voo','$usuario','$aeroporto')";

	//se não ocorrer erro então...
	$data = mysqli_query($conectar,$sql);

	if ($data){	
		//Associa os dados do usuario
		header("Location: ../servicos.php");
	}else{
		//se não gravar com sucesso...
		echo "Erro ao tentar fazer reserva,  tente novamente!";
	} 		
} else {
	header("Location: ../erroReserva.php");
}

?>