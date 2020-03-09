<?php

    $n = $_GET['nmb1'];

    for($i = 1; $i < $n; $i++){
        if($n % $i == 0){
            echo " ".$i;
        }
    }
    
    echo("<a href='index.html'><h3>Voltar</h3><a>");

?>