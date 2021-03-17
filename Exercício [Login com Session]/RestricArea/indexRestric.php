<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css"/>
        <style>
    
        </style>
    </head>
    <body id="bodyHome">
        <?php include_once("verifySession.php"); ?>
        <div id="fundoHome">
            <div id="superficieHome">
                <div id="detailHome"></div>
                <h1 id="welcome">Seja bem-vindo, <?php echo ucfirst($_SESSION['usernameSession']); ?>!</h1>
                <button id="btnSair"><a href="../logout.php">sair</a></button>
            </div>
        </div> 
    </body>
</html>