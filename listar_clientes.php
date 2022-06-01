<?php
  include("controlo/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Admin | Aeroporto </title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Estilo css da página -->	
		<link type="text/css" rel="stylesheet" href="css/estilo_admin.css"/>
			<link rel="stylesheet" type="text/css" href="css/estilo.css">
		
		<style>
			body {
				font-family: Arial, Helvetica, sans-serif;
			}
		</style>
	</head>

	<body>
		<div class="header">
			<h1> Página do Administrador </h1>
			<p> Administração do Website </p>
		</div>

		<div class="navbar">
			<a href="admin.php" class="left"> Início </a>
			<a href="marcar_viagem.php"> Marcação de Viagens </a>
			<a href="listar_aeroportos_avioes.php"> Listar aeroportos e Aviões </a>
			<a href="listar_clientes.php" class="active"> Listar Clientes e Funcionários</a>
			<a href="servicos2.php"> Serviços </a>
			<a href="cadastro_funcionario.php"> Cadastrar funcionário </a>


			<a href="controlo/logoutControlo.php" class="right"> Terminar Sessão </a>
			

		</div>

		<div class="row">
			<div class="side">
				<h2> Informações do Sistema </h2>
				
				<img class="fakeimg" src="imagem/images (5).jpg" style="height:200px; width: 100%;
  				padding: 1px;">
			</div>
			
			<div class="main">
				<h2> CLIENTES </h2>
				
				<h5> Todos os clientes existentes no sistema </h5>
				
				<table border="1">
					<thead>
   						<tr>
       						<th> ID </th>
       						<th> nome do cliente </th>
       						<th> Género </th>
       						<th> Data de Nascimento</th>
       						<th> Morada </th>
							<th>Nacionalidade</th>
							<th> Email </th>
							<th> Contactos</th>
   						</tr>
   					</thead>

					<?php
						//buscar voos
						$cliente = "SELECT * FROM `cliente` WHERE 1";
						$clientes = mysqli_query($conectar, $cliente);
                		
                		while($list = mysqli_fetch_assoc($clientes)){ 
                    	
               		?>

					<tr>
						<td> <?php echo $list['id_cliente']; ?> </td>
						<td> <?php echo $list['nome_cliente']; ?> </td>
						<td> <?php echo $list['genero_cliente']; ?> </td>
						<td> <?php echo $list['data_nasc_passageiro']; ?>  </td>
						<td> <?php echo $list['morada_cliente']; ?> </td>
						<td> <?php echo $list['nacionalidade_cliente']; ?> </td>
						<td> <?php echo $list['email_cliente']; ?> </td>
						<td> <?php echo $list['telefone_cliente']; ?> </td>
					</tr>

					
					<?php } ?>
				</table>
				<input type="submit" value="Imprimir">
			</div>
		</div>

		<div class="row">
			<div class="side">
				<h2> Informações do Sistema </h2>
				
				<img class="fakeimg" src="imagem/images (5).jpg" style="height:200px; width: 100%;
  				padding: 1px;">
			</div>
			
			<div class="main">
				<h2> FUNCIONÁRIOS </h2>
				
				<h5> Todos os funcionários existentes no sistema </h5>
				
				<table border="1">
					<thead>
   						<tr>
       						<th> ID </th>
       						<th> nome do funcionário </th>
       						<th> Data de nascimento </th>
       						<th> Género</th>
       						<th> Contactos </th>
							<th>Morada</th>
							<th> Categoria </th>
							
   						</tr>
   					</thead>

					<?php
						//buscar voos
						$funcionario = "SELECT * FROM `funcionario` WHERE 1";
						$funcionarios = mysqli_query($conectar, $funcionario);
                		
                		while($fun = mysqli_fetch_assoc($funcionarios)){ 
                    	
               		?>

					<tr>
						<td> <?php echo $fun['id_Funcionario']; ?> </td>
						<td> <?php echo $fun['nome_funcionario']; ?> </td>
						<td> <?php echo $fun['Data_nasc_funcionario']; ?> </td>
						<td> <?php echo $fun['genero_funcionario']; ?>  </td>
						<td> <?php echo $fun['telefone_funcionario']; ?> </td>
						<td> <?php echo $fun['morada_funcionario']; ?> </td>
						<td> <?php echo $fun['Categoria_funcionario_id']; ?> </td>
						
					</tr>
					
					<?php } ?>
				</table>
				<input type="submit" value="Imprimir">
			</div>
		</div>



		<div class="footer">
  			<p>
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
				Todos os direitos reservados | Site desenvolvido pelo 
				<a href="#" target="_blank"> Grupo Nº3 Almeida Monteiro </a>
			</p>
		</div>
	</body>
</html>