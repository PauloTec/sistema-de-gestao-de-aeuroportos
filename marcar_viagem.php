<?php 
include("controlo/conexao.php");

//lista de aviões
$encontrar_aviao = "SELECT * FROM `aviao` WHERE 1";
$encontrar_aviao1 = mysqli_query($conectar, $encontrar_aviao);

//lista de aeroportos
$encontrar_aeroporto = "SELECT * FROM `aeroporto`";
$encontrar_aeroporto1 = mysqli_query($conectar, $encontrar_aeroporto);  

$encontrar_cliente = "SELECT * FROM `cliente`";
$encontrar_cliente1 = mysqli_query($conectar, $encontrar_cliente);  

$encontrar_funcionario = "SELECT * FROM `funcionario`";
$encontrar_funcionario1 = mysqli_query($conectar, $encontrar_funcionario);  


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
  			<h1> MARCAÇÃO DE VIAGEM </h1>
  			<p> A <b> Mundundi </b> softwares. </p>
		</div>

		<div class="navbar">
      <a href="admin.php" class="left"> Início </a>
      <a href="#" class="active"> Marcação de Viagens </a>
      <a href="listar_aeroportos_avioes.php"> Listar aeroportos e Aviões </a>
      <a href="listar_clientes.php"> Listar Clientes e Funcionários</a>
      <a href="servicos2.php"> Serviços </a>
      <a href="cadastro_funcionario.php"> Cadastrar funcionário </a>


      <a href="controlo/logoutControlo.php" class="right"> Terminar Sessão </a>
      

    </div>

		<div class="row">
  			<div class="side">
         		<br />
    			<h2> Marcar Viagem </h2>
    			    			    			
    			<form method="POST" action="controlo/marcarViagemControlo.php ">
            <input type="text" name="numero_voo" placeholder="Inserir o número do voo" /> 
            <br /><br />  
              Data do voo:
              <input type="date" id="fname" name="data_voo" >
              <br /><br />

            	Cliente: 
              <select name="nome" >
              <?php while($clientes = mysqli_fetch_assoc($encontrar_cliente1)){ ?>
                  <option value="<?php echo $clientes['id_cliente']; ?>"> 
                    <?php echo $clientes['nome_cliente']; ?> 
                  </option>
              <?php } ?>
              </select> 
              <br /><br />

              Avião: 
              <select name="aviao" >
              <?php while($avioes = mysqli_fetch_assoc($encontrar_aviao1)){ ?>
                  <option value="<?php echo $avioes['id_aviao']; ?>"> 
                    <?php echo $avioes['numero_aviao']; ?> 
                  </option>
              <?php } ?>
              </select> 
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

              Funcionário: 
              <select name="funcionario" >
              <?php while($funcionarios = mysqli_fetch_assoc($encontrar_funcionario1)){ ?>
              <option value="<?php echo $funcionarios['id_Funcionario']; ?>"> 
                <?php echo $funcionarios['nome_funcionario']; ?> 
              </option>
              <?php } ?>
              </select> 
              <br /><br />
              
              <input type="submit" value="Marcar">
				    </form>
  		  	</div>
  		
  			<div class="main">
    			<h2> Qualidade e conforto do viajante.</h2>
    			
    			<img src="imagem/serv4.jpg" style="height:400px; width: 100%;
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
