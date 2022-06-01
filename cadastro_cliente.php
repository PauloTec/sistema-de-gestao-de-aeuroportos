<!DOCTYPE html>
<<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Gestão de Aeroportos </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    
    <body>
        <div class="header">
            <h1> Gestão de Aeroportos </h1>
            <p> A <b> Mundundi </b> softwares. </p>
        </div>

        <div class="navbar">
             <a href="index.php" class="left"> Index </a>
            <a href="loginIndex.php" class="left"> Login </a>
            <a href="cadastro_cliente.php" class="active"> Cadastrar </a>
            <a href="login_funcionario.php" class="left"> ADMIN </a>
        </div>

        <div class="side">
            <!--div class="fakeimg" style="height:200px;">Image</div-->

            <div class="container">
			<div style="text-align:center">
				<h2> Cadastro do Cliente </h2>

				<img src="imagem/info.jpg" style="width:5%; align-items: center;">
			</div>
							 
			<form method="POST" action="controlo/cadastroClienteControlo.php">
				<input type="text" id="fname" name="nome" placeholder="Escreva seu nome">
                <br /> <br />
				
                <input type="text" id="lname" name="genero" placeholder="Escreva seu Género">
                <br /> <br />

				<label for="country"> Data de Nascimento: </label>
				<br /> <br />

				<input type="date" id="fname" name="data_nascimento" >
                <br /> <br />

				<input type="text" id="fname" name="morada" placeholder="Escreva seu Morada">
                <br /> <br />

				<input type="text" id="fname" name="nacionalidade" placeholder="Escreva seu Nacionalidade">
                <br /> <br />

				<input type="text" id="fname" name="email" placeholder="Escreva seu Email">
                <br /> <br />

				<input type="text" id="fname" name="telefone" placeholder="Escreva seu Telefone">
                <br /> <br />

				<input type="text" id="fname" name="senha" placeholder="Escreva sua Senha">
                <br /> <br />

				<input type="submit" value="Guardar dados">
			</form>
		</div>
        </div>
    </body>
</html>











