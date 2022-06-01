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
            <h1> Gestão de Aeroportos </h1>
            <p> A <b> Mundundi </b> softwares. </p>
        </div>

        <div class="navbar">
        <a href="index.php" class="left"> Index </a>
            <a href="loginIndex.php" class="active"> Login </a>
            <a href="cadastro_cliente.php"> Cadastrar </a>
            <a href="login_funcionario.php" class="left"> ADMIN </a>
        </div>

        <div class="side">
            <br />
            <h2> Entrar na Plataforma (usuários) </h2>
            <h5> Usa seus dados para iniciar sessão:</h5>

            <!--div class="fakeimg" style="height:200px;">Image</div-->

            <form method="POST" action="controlo/loginClienteControlo.php">
                <input type="text" name="nome" placeholder="Escreva seu nome" /> 
                <br /> <br />

                <input type="password" name="senha" placeholder="Escreva sua senha" /> 
                <br /><br />

                <input type="submit" value="Entrar">
            </form>
        </div>
    </body>
</html>











