<?php
    if (isset($_POST["enviar"])) {
        $num = $_POST["num"];
    }

    if ($num > 10) {
        echo "$num é maior que 10!";
    }

    /*elseif ($num < 10){
        echo "$num é menor que 10!";
    }

    else {
        echo "$num é igual a 10!";
    }*/
?>