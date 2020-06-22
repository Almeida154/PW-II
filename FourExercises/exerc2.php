<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Exercício 2</title>
    </head>
    <body id="sub">
        <div class="container">
            <div class="subDiv">
                <div class="titulo"><p class="p">Etec de Guaiacity</p></div>
                <?php
                    echo "Vetor aleatório:<br>";
                    $vetor = array();
                    for($i=0; $i<10; $i++){
                        $rand = rand(0, 99);
                        $vetor[$i] = $rand;
                        echo "[ $vetor[$i] ] ";
                    }
                    echo "<br><br>Vetor aleatório em ordem decrescente:<br>";
                    rsort($vetor);
                    for($i=0; $i<10; $i++){
                        echo "[ $vetor[$i] ] ";
                    }
                ?>
            </div>
        </div>
        <center><a href="index.html"><button class="butRES">Voltar!</button></a></center>
    </body>
</html>