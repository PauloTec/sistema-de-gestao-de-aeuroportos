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
            <h1> Cadastrar Funcionário </h1>
            <img src="imagem/funcionario.png" alt="" width="80px">
        </div>

        <div class="navbar">
            <a href="admin.php" class="left"> Início </a>
            <a href="marcar_viagem.php"> Marcação de Viagens </a>
            <a href="listar_aeroportos_avioes.php"> Listar aeroportos e Aviões </a>
            <a href="listar_clientes.php"> Listar Clientes e Funcionários</a>
            <a href="servicos2.php"> Serviços </a>
            <a href="cadastro_funcionario.php" class="active"> Cadastrar funcionário </a>


            <a href="controlo/logoutControlo.php" class="right"> Terminar Sessão </a>
            

        </div>
        <div class="side">           
            <form method="POST" action="controlo/cadastroAdminControlo.php">
                <input type="text" id="fname" name="nome" placeholder="Escreva seu nome">
                <br /> <br />
				
				<label for="country"> Data de Nascimento: </label>
				<input type="date" id="fname" name="data_nascimento" >
				<br /> <br />

				<input type="text" id="lname" name="genero" placeholder="Escreva seu Género">
				<br /> <br />

				<input type="text" id="fname" name="telefone" placeholder="Escreva seu Telefone">
				<br /> <br />

				<input type="text" id="fname" name="morada" placeholder="Escreva seu Morada">	
				<br /> <br />

				<input type="text" id="fname" name="senha" placeholder="Escreva sua Senha">
				<br /> <br />
				
				<input type="submit" value="Guardar dados">	
            </form>
        </div>
    </body>
</html>











