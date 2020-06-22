<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Exercício 3</title>
    </head>
    <body id="sub">
        <div class="container">
            <div class="subDiv">
                <div class="titulo"><p class="p">Etec de Guaiacity</p></div>
                <?php
                    $vetor = array();
                    $aux = 0;
                    $na = $_GET['v'];
                    for($i=0; $i<10; $i++){
                        $rand = rand(0, 25);
                        $vetor[$i] = $rand;
                    }
                    echo "Número digitado:<br>";
                    echo "[ $na ]<br>";
                    echo "<br>Verificação:<br>";
                    for($i=0; $i<10; $i++){
                        $sera = false;
                        $sera = ($na == $vetor[$i]) ? true : false;
                        if($sera){
                            $aux = 1;
                            echo "[ <span>$vetor[$i]</span> ] ";
                        }
                        else{
                            echo "[ $vetor[$i] ] ";
                        }
                        
                    }
                    if($aux == 0) echo "<br><br>Não está contido!";
                    else echo "<br><br>Está contido!";
                ?>
            </div>
        </div>
        <center><a href="exerc3.html"><button class="butRES">Voltar!</button></a></center>
    </body>
</html>