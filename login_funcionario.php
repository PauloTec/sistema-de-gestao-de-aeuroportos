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
            <h1> Funcionário </h1>
            <img src="imagem/funcionario.png" alt="" width="80px">
        </div>

        <div class="navbar">
        <a href="index.php" class="left"> Index </a>
            <a href="loginIndex.php" class="left"> Login </a>
            <a href="cadastro_cliente.php"> Cadastrar </a>
            <a href="login_funcionario.php" class="active"> ADMIN </a>
        </div>

        <div class="side">
            <h2> LOGIN </h2>
           
            <form method="POST" action="controlo/loginAdminControlo.php">
                <input type="text" name="nome" placeholder="Escreva seu nome" /> 
                <br /> <br />

                <input type="password" name="senha" placeholder="Escreva sua senha" /> 
                <br /><br />

                <input type="submit" value="Entrar">
            </form>
        </div>
    </body>
</html>











