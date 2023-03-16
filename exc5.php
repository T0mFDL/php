<?php

    if (isset($_POST["enviar"])) {
        $peso = $_POST["peso"];
        $multa = 4.00;
        $excesso = $peso-50;
    }

    if ($peso <= 50) {
        echo "O peso do peixe está dentro do regulamento!";
    }

    elseif ($peso > 50) { 
        
        $calculo = $excesso * $multa;

        echo "João deverá pagar <font color=\"red\"><b>R$$calculo,00</b></font color> a mais pois o excesso do regulamento foi de $excesso";
    }

?>