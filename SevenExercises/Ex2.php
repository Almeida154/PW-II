<?php

    $Nome = $_GET['txtNome'];
    $n1 = $_GET['nmb1'];
    $n2 = $_GET['nmb2'];
    $n3 = $_GET['nmb3'];
    $n4 = $_GET['nmb4'];
    $avg = ($n1 + $n2 + $n3 + $n4)/4;

    if($avg < 5) echo "<script>alert('".$Nome.", você foi RETIDO!');</script>";
    else if($avg >= 5 && $avg < 7) echo "<script>alert('".$Nome.", você está em EXAME!');</script>";
    else if($avg >= 7) echo "<script>alert('".$Nome.", você foi APROVADO!');</script>";

    echo("<a href='index.html'><h3>Voltar</h3><a>");

?>