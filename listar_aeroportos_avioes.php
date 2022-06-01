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
			<a href="listar_aeroportos_avioes.php" class="active"> Listar aeroportos e Aviões </a>
			<a href="listar_clientes.php"> Listar Clientes e Funcionários</a>
			<a href="servicos2.php"> Serviços </a>
			<a href="cadastro_funcionario.php"> Cadastrar funcionário </a>


			<a href="controlo/logoutControlo.php" class="right"> Terminar Sessão </a>
			

		</div>

		<div class="row">
			<div class="side">
				<h2> AEROPORTOS </h2>
				
				<h5> Todos os aeroportos disponíveis no sistema </h5>
				
				<table border="1">
					<thead>
   						<tr>
       						<th> ID </th>
       						<th> nome do Aeroporto </th>
       						<th> País  </th>
       						<th> Cidade  </th>
   						</tr>
   					</thead>

					<?php
						//buscar voos
						$aeroporto = "SELECT * FROM `aeroporto` WHERE 1";
						$aeroportos = mysqli_query($conectar, $aeroporto);
                		
                		while($air = mysqli_fetch_assoc($aeroportos)){ 
                    	
               		?>

					<tr>
						<td> <?php echo $air['id_aeroporto']; ?> </td>
						<td> <?php echo $air['nome_aeroporto']; ?> </td>
						<td> <?php echo $air['pais_aeroporto']; ?> </td>
						<td> <?php echo $air['cidade_aeroporto']; ?>  </td>
						
					</tr>
					
					<?php } ?>
				</table>
			</div>
			<div class="side" style="background-color: white;">
				<h2> AVIÕES </h2>
				
				<h5> Todos os avões disponíveis no Sistema </h5>
				
				<table border="1">
					<thead>
   						<tr>
       						<th> ID </th>
       						<th> Avião </th>
       						<th> Número de lugares </th>
   						</tr>
   					</thead>

					<?php
						//buscar voos
						$aviao = "SELECT * FROM `aviao` WHERE 1";
						$aviaos = mysqli_query($conectar, $aviao);
                		
                		while($avi = mysqli_fetch_assoc($aviaos)){ 
                    	
               		?>

					<tr>
						<td> <?php echo $avi['id_aviao']; ?> </td>
						<td> <?php echo $avi['numero_aviao']; ?> </td>
						<td> <?php echo $avi['numero_lugares_aviao']; ?> </td>
						
					</tr>
					
					<?php } ?>
				</table>
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