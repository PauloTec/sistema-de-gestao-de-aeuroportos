<?php 
include_once("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM `voo` WHERE id_voo = '$id'";
$dados = mysqli_query($conectar,$sql);

if ($dados){	
	header("Location: ../admin.php");
}else{
	//se não gravar com sucesso...
	echo '<h3> Erro ao tentar apagar, <a href="../index.php"> Tente novamente </a> </h3>';
}		
?>