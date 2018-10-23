<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $soma = $num1+$num2;

    if($soma < 10){
        echo "O resultado é ".$soma." e é menor que 10";
    }else if($soma == 10){
        echo "O Resultado da soma é igual a 10";
    }else{
        echo "O resultado é ".$soma." e é maior que 10";
    }


?>