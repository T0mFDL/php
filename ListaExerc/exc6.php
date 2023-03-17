<?php

    $arquivo = $_POST["arquivo"];
    $net = $_POST["net"];
    $calculo1 = $net / 8; #Calcular de megabits para Megabytes
    $calcNet = ($arquivo / $calculo1); #Calcula a velocidade em segundos
    $calcTemp = $calcNet / 60;
    $calcTemp = number_format($calcTemp, 2,'.','.');

    print_r("A tempo de download é de $calcTemp minutos");


?>