<?php

    $n = $_GET['nmb1'];
    $primo = 0;
    for($i = 1; $i <= $n; $i++){
        if($n % $i == 0){
           $primo++; 
        }
    }

    if($primo == 2) echo"<script>alert('".$n." eh primo!');</script>";
    else echo"<script>alert('".$n." NAO eh primo!');</script>";

    echo("<a href='index.html'><h3>Voltar</h3><a>");

?>