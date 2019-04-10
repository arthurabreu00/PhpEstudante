<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Exercicío 4 </title>
</head>
<body>
<?php include_once('includes/nav.php'); ?>
    <form method="post">
        <label> A</label>
        <input type="number" name="a"/>

        <label> B</label>
        <input type="number" name="b"/>

        <label> C</label>
        <input type="number" name="c"/>

        <label> D</label>
        <input type="number" name="d"/>

        <button type="submit"> Resposta </button>
    </form>

    <?php

    $a = isset($_POST['a']) ? $_POST['a'] : 0;
    $b = isset($_POST['b']) ? $_POST['b'] : 0;
    $c = isset($_POST['c']) ? $_POST['c'] : 0;
    $d = isset($_POST['d']) ? $_POST['d'] : 0;

    $soma = $a + $c;
    $multiplicacao = $b * $d;

    if($soma > $multiplicacao) echo 'A+C é maior que B+D';
    else if($soma < $multiplicacao) echo 'A+C é menor que B+D';
    else echo 'A+C é igual A+B';
 

    ?>
</body>
</html>