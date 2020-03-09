<?php

    $base = $_GET['nmb1'];
    $exp = $_GET['nmb2'];
    $res = 1;

    for($i = 0; $i < $exp; $i++){
        $res *= $base;
    }

    echo ($base." elevado na ".$exp." é: ".$res);
   
    //echo
    //"<script>
    //alert('".$base.", elevado na".$exp." é: ".$res"');
    //</script>";
    
    echo("<a href='index.html'><h3>Voltar</h3><a>");
    
?>