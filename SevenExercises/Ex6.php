<?php

    $n = $_GET['nmb1'];
    $n1 = 0;
    $n2 = 1;
    $n3;
    echo $n1." ".$n2;
    for($i = 2; $i < $n; $i++){
        $n3 = $n1 + $n2;
        echo " ".$n3;
        $n1 = $n2;
        $n2 = $n3;
    }

    echo("<a href='index.html'><h3>Voltar</h3><a>");

?>