<?php

    class Baiano{
        public function setAumento($aliquota){
        $Nome = $_GET['txtNome'];
        $SalarioAtual = $_GET['nmb1'];
        $por; 
        $NovoSalario;
        $por = ($SalarioAtual * $aliquota) / 100;
        $NovoSalario = $SalarioAtual + $por;
        echo($Nome.", você é do departamento de DESENVOLVIMENTO, por tanto, terá um aumento de ".$aliquota."%<br>");
        echo("Seu antigo salário: ".$SalarioAtual."<br>");
        echo("Seu novo salário: ".$NovoSalario);
        }
    }

    $aum = new Baiano();

    $Nome = $_GET['txtNome'];
    $SalarioAtual = $_GET['nmb1'];
    $Depart = $_GET['slDepart'];
    
    switch($Depart){
        case 1:
            $por; 
            $NovoSalario;
            $por = ($SalarioAtual * 15) / 100;
            $NovoSalario = $SalarioAtual + $por;
            echo($Nome.", você é do departamento OPERACIONAL, por tanto, terá um aumento de 15%.<br>");
            echo("Seu antigo salário: ".$SalarioAtual."<br>");
            echo("Seu novo salário: ".$NovoSalario);
            break;
        case 2:
            if($SalarioAtual >= 1500 && $SalarioAtual < 1750){
                $aum->setAumento(12);
            }
            else if($SalarioAtual >= 1750 && $SalarioAtual < 2000){
                $aum->setAumento(10);
            }
            else if($SalarioAtual >= 2000 && $SalarioAtual < 3000){
                $aum->setAumento(7);
            }
            else if($SalarioAtual > 3000){
                $aum->setAumento(5);
            }
            break;
    }

    echo("<a href='index.html'><h3>Voltar</h3><a>");

?>