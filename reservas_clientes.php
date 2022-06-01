<?php 
include("controlo/conexao.php");

$logado = $_GET['user'];

//lista de aeroportos
$encontrar_aeroporto = "SELECT * FROM `aeroporto`";
$encontrar_aeroporto1 = mysqli_query($conectar, $encontrar_aeroporto);  

$encontrar_cliente = "SELECT * FROM `cliente`";
$encontrar_cliente1 = mysqli_query($conectar, $encontrar_cliente);  

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Gestão de Aeroportos </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	
	<body>
		<div class="header">
  			<h1> RESERVAS DE VIAGEM </h1>
  			<p> A <b> Mundundi </b> softwares. </p>
		</div>

		<div class="navbar">
        <a href="servicos.php" class="left"> Serviços </a>
        <?php
        echo '<a href="reservas_clientes.php?user='.$logado.'"> Reservar Viagem  </a>';
        ?>

        <a href="controlo/logoutControlo.php" class="right"> Terminar Sessão </a>
        <a href="#" class="right" style="color: yellow;"> <?php echo $logado; ?> </a>
    </div>
		<div class="row">
  			<div class="side">
         		<br />
    			<h2><marquee> Reservar Viagem </marquee></h2>
    			    			    			
    			<form method="POST" action="controlo/reservasControlo.php ">
            <input name="usuario" type="hidden" value="<?php echo $logado; ?>" > 

            Data pretendida:
            <input type="date" id="fname" name="data_voo" >
            <br /><br />

            Aeroporto: 
            <select name="aeroporto" >
              <?php while($aeroportos = mysqli_fetch_assoc($encontrar_aeroporto1)){ ?>
                <option value="<?php echo $aeroportos['id_aeroporto']; ?>"> 
                  <?php echo $aeroportos['nome_aeroporto']; ?> 
                </option>
              <?php } ?>
            </select> 
            <br /><br />

            <input type="text" name="origem_voo" placeholder="Escolha a origem" /> 
            <br /><br />

            <input type="text" name="destino_voo" placeholder="Escolha o destino" /> 
            <br /><br />
              
            <input type="submit" value="Reservar">
				    </form>
  		  	</div>
  		
  			<div class="main">
    			<h2> Qualidade e conforto do viajante.</h2>
    			
    			<img src="imagem/images (1).jpg" style="height:400px; width: 100%;
  				padding: 20px;">
    			
    			<p>
    				A fim de facilitar a sua viagem, aconselhamos os passageiros a tomar todas as medidas necessárias para estar em dia com as formalidades sanitárias , aduaneiras e administrativas (passaporte, visto , etc.).
    			</p>
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
