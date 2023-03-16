<?php
    $aln = $_POST["aln"];
    $num1 = $_POST["n1"];
    $num2 = $_POST["n2"];
    $num3 = $_POST["n3"];

 if ($num1 > 10 || $num2 > 10 || $num3 > 10) {
    echo "Nota Inválida, use apenas notas de 0 a 10!";
  
 }
    elseif (isset($_POST["enviar"])) {
        
        $media = ($num1 + $num2 + $num3)/3;
        $media = number_format($media, 2,'.','');

    }

    elseif ($media >= 7.0) {
        echo "$aln está com a média $media e está Aprovado!";
    }

    elseif ($media <= 5.0) {
        echo "$aln está com a média $media e está Reprovado";
    }

    elseif ($media >= 5.1 && $media <= 6.9) {
        echo "$aln está com a média $media e está de Recuperação";
    }
 
?>