<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Exercicío 2 </title>
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

    $resposta = $num >= 10 ? "O valor é maior que 10" : "O valor não é maior ou igual a 10";

    echo $resposta;

    ?>

</body>
</html>