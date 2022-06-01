<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);
	//Na variavel conectar vão o endereço da máquina, o nome de usuario no MySql e a senha
	$conectar = mysqli_connect("127.0.0.1", "root", "") or die ("Não foi possivel conectar a base de dados!!");

	//Na variavel db vão a variavel conectar acima e o nome da base de dados
	$db = mysqli_select_db($conectar,"gest_aeroporto_db") or die ("Impossivel entrar na Base de Dados");
?>
