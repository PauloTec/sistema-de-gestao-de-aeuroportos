<?php
	session_start();
	session_destroy(); //destruir a sessão

	//voltar a página inicial
    header("Location:../loginIndex.php");
?>