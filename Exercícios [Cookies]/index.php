<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cookies</title>
        <link rel="stylesheet" href="style.php" type="text/css"/>
    </head>
    <body>
        <div id="fundo">
            <div id="superficie">
                <div id="detail"></div>
                <h1>Login</h1>
                <form action="cookie.php" method='POST'>
                    <input type="text" placeholder="Username" autocomplete="off"><br>
                    <input type="password" placeholder="Password" autocomplete="off"><br>
                    <select name="themeSelect">
                        <option value="orange">Theme</option>
                        <option value="#49a9fc">Azul</option>
                        <option value="#c74c4c">Vermelho</option>
                        <option value="#6ec491">Verde</option>
                    </select>
                    <input id="btn" type="submit" value="Registrar">
                </form>
                <p>Não tem uma conta? <span onclick="troll()">Registre-se!</span></p>
            </div>
        </div>
    </body>
    <script>
        function troll(){
            alert('Não tem nada aqui! kkkj')
        }
    </script>
</html>