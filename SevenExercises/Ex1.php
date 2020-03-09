<?php

    $nome = $_GET['txtNome'];
    $anoN = $_GET['txtAnoN'];
    $id = 2019 - $anoN;
    if($id >= 18){
        echo "<script>alert('".$nome.", voce pode tirar sua carta!');</script>";
    }
    else{
        echo "<script>alert('".$nome.", voce NAO pode tirar sua carta!');</script>";
    }

    echo("<a href='index.html'><h3>Voltar</h3><a>");
    
?>