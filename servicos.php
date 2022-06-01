<?php
  include("controlo/conexao.php");
  session_start();

  $logado = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Gestão de Aeroportos </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/servicos.css">
	</head>
	
	<body>
		<div class="header">
  			<h1> SERVIÇOS DA GEST AEROPORTOS </h1>
  			<p> A <b> melhor gestão </b> para a sua viagem. </p>
		</div>

		<div class="navbar">
  			<a href="#" class="active"> Serviços </a>
        <?php
        echo '<a href="reservas_clientes.php?user='.$logado.'"> Reservar Viagem  </a>';
        ?>

        <a href="controlo/logoutControlo.php" class="right"> Terminar Sessão </a>
        <a href="#" class="right" style="color: yellow;"> <?php echo $logado; ?> </a>
		</div>

		<div class="row">
      <div class="column">
        <div class="card">
          <img src="imagem/aviao.jpg" alt="John" style="width:100%">
          <div class="container">
            <h2>Bilhetes de avião e turismo</h2>
            <p>
              Passageiros que não tiveram tempo de comprar seus bilhetes de avião ou que perderam seu voo têm a possibilidade de comprar no local a sua viagem às companhias aéreas, incluindo o dia da partida, se houver vagas disponíveis. </br></br>
            </p>
            <p><button class="button"> Saiba Mais  </button></p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="imagem/serv2.jpg" alt="Jane" style="width:100%">
          <div class="container">
            <h2>Recepção</h2>
            <p>Um estande de boas-vindas está disponível no terminal principal do aeroporto. 
              A equipe da recepção pode informar viajantes e acompanhantes sobre seu voo, 
              sua experiência no aeroporto ou as formalidades a serem cumpridas. 
              </br> 
              Não hesite em pedir-lhes informações.</p>
            <p>
              <button class="button"> Saiba Mais </button>
            </p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="imagem/serv5.jpg" alt="Mike" style="width:100%">
          <div class="container">
            <h2>Terminais Bancários & Câmbios</h2>
            <p> Os Aeroportos possuem vários serviços financeiros em diferentes áreas do terminal: bancos, caixas eletrônicos e agências de câmbio permitem que usuários e viajantes retirem, troquem e transfiram seu dinheiro a qualquer momento.
            </br>
            De segunda a sábado das 8h às 15h </br>
            <p><button class="button"> Saiba Mais </button></p>
          </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="imagem/serv1.jpg" alt="John" style="width:100%">
        <div class="container">
          <h2>Salas VIP</h2>
          <p>
          Dois lounges (salas VIP) estão disponíveis no Aeroporto Internacional de Luanda. 
          O acesso é restrito a viajantes de Business e de Primeira classe de certas companhias aéreas e a titulares de cartão VIP. 
          </br> 
          Também é possível acessá-lo pontualmente pagando taxas de acesso. 
          </br>
          </p>
          <p> <button class="button"> Saiba Mais </button> </p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="imagem/transferir (2).jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Polícia e Segurança</h2>
        <p>
          O Aeroporto está constantemente preocupado com a segurança dos passageiros e aeronaves. 
           
          A polícia do aeroporto está está escutando todos os viajantes. Os guardas de segurança também garantem a conformidade com os padrões internacionais. 
          </br>
        </p>
        
        <p> <button class="button"> Saiba Mais </button> </p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="imagem/serv4.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Passageiros com mobilidade reduzida</h2>
        <p>Cadeiras de rodas e pessoal de apoio estão disponíveis gratuitamente para passageiros com mobilidade reduzida partindo e chegando ao aeroporto. Quando você reservar o seu voo, é essencial indicar à companhia aérea que você precisará de assistência no solo e/ou em voo para facilitar as formalidades de check-in e de acesso à área de embarque.</li></br></br></p>
        <p><button class="button"> Saiba Mais </button></p>
      </div>
    </div>
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
