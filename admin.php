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
			<a href="#" class="active"> Início </a>
			<a href="marcar_viagem.php"> Marcação de Viagens </a>
			<a href="listar_aeroportos_avioes.php"> Listar aeroportos e Aviões </a>
			<a href="listar_clientes.php"> Listar Clientes e Funcionários</a>
			<a href="servicos2.php"> Serviços </a>
			<a href="cadastro_funcionario.php"> Cadastrar funcionário </a>


			<a href="controlo/logoutControlo.php" class="right"> Terminar Sessão </a>
			

		</div>

		<div class="row">
			<div class="side">
				<h2> Informações do Sistema </h2>
				
				<img class="fakeimg" src="imagem/info2.png" style="height:200px; width: 100%;
  				padding: 20px;">
			</div>
			
			<div class="main">
				<h2> VOOS </h2>
				
				<h5> Todos os voos marcados por data </h5>
				
				<table border="1">
					<thead>
   						<tr>
       						<th> ID </th>
       						<th> numero voo </th>
       						<th> data voo </th>
       						<th> origem_voo </th>
							<th> destino_voo </th>
							<th> aviao </th>
							

   						</tr>
   					</thead>


					<?php
						//buscar voos
						$voo = "SELECT * FROM `voo` ORDER by id_voo DESC LIMIT 8";
						$voos = mysqli_query($conectar, $voo);
                		
                		while($voar = mysqli_fetch_assoc($voos)){ 
                    	$id = $voar['id_voo'];
               		?>

					<tr>
						<td> <?php echo $voar['id_voo']; ?> </td>
						
						<td> <?php echo $voar['numero_voo']; ?> </td>
						<td> <?php echo $voar['data_voo']; ?>  </td>
						<td> <?php echo $voar['origem_voo']; ?> </td>
						<td> <?php echo $voar['destino_voo']; ?> </td>
						<td> <?php echo $voar['aviao_id']; ?> aviao </td>
						<td> <?php echo "<a href='controlo/cancelarControlo.php?id=$id'> cancelar </a>"; ?> </td>
					</tr>
					
					<?php } ?>
				</table>
					<input type="submit" value="Imprimir">
			</div>
		</div>


		<div class="row">
			<div class="side">
				<h2> Informações do Sistema </h2>
				
				<img class="fakeimg" src="imagem/info2.png" style="height:200px; width: 100%;
  				padding: 20px;">
			</div>
			
			<div class="main">
				<h2> RESERVAS </h2>
				
				<h5> Todas reservas feitas pelos clientes  </h5>
				
				<table border="1">
					<thead>
   						<tr>
       						<th> ID </th>
       						<th> nome do cliente </th>
       						<th> data pretendida </th>
       						<th> origem_voo </th>
							<th> destino_voo </th>
   						</tr>
   					</thead>
   					

					<?php
						//buscar voos
						$reserva = "SELECT * FROM `reserva` WHERE 1";
						$reservas = mysqli_query($conectar, $reserva);
                		
                		while($cli = mysqli_fetch_assoc($reservas)){ 
                    	
               		?>

					<tr>
						<td> <?php echo $cli['id_reserva']; ?> </td>
						<td> <?php echo $cli['cliente_nome']; ?> </td>
						<td> <?php echo $cli['data_voo']; ?> </td>
						<td> <?php echo $cli['origem_voo']; ?> </td>
						<td> <?php echo $cli['destino_voo']; ?>  </td>
						
						
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