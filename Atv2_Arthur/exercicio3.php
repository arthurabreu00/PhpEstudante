<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Exercicío 3 </title>
</head>
<body>
<?php include_once('includes/nav.php'); ?>
    <form method="post">
        <label> Digite um número </label>
        <input type="number" name="num"/>
        <button type="submit"> Resposta </button>
    </form>

    <?php

    $num = isset($_POST['num']) ? $_POST['num'] : 0;

    $resposta = "";

    if($num > 0) $resposta =  "Valor Positivo";
    else if($num == 0) $resposta = "Igual a zero";
    else if($num < 0) $resposta = "Valor Negativo";

    echo $resposta;

    ?>


</body>
</html>