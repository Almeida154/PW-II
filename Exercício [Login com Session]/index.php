<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body>
        <div id="fundo">
            <div id="superficie">
                <div id="detail"></div>
                <h1>Login</h1>
                <form action="loginVerify.php" method='POST'>
                    <input type="text" placeholder="Username" autocomplete="off" name="txtUser" ><br>
                    <input type="password" placeholder="Password" autocomplete="off" name="txtPassword"><br>
                    <input id="btn" type="submit" value="Acessar">
                </form>
                <a href="indexReg.php"><p class="goANDback">Não tem uma conta? <span>Registre-se!</span></p></a>
            </div>
        </div>
    </body>
</html>