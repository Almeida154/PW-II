<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body>
        <div id="fundoRegister">
            <div id="superficieRegister">
                <div id="detailRegister"></div>
                <h1>Register</h1>
                <form action="" method='POST'>
                    <input type="text" placeholder="Username" autocomplete="off" name="txtUser" ><br>
                    <input type="password" placeholder="Password" autocomplete="off" name="txtPassword"><br>
                    <input type="password" placeholder="Confirm Password" autocomplete="off" name="txtConfirmPassword"><br>
                    <input type="number" placeholder="First deposit (R$)" autocomplete="off" name="txtMoney"><br>
                    <input onclick="troll()" id="btn" type="submit" value="Registrar">
                </form>
                <a href="index.php"><p class="goANDback"><span>Voltar</span></p></a>
            </div>
        </div>
        <script>
            function troll(){
                alert("Ainda não dá ;-;")
            }
        </script>
    </body>
</html>