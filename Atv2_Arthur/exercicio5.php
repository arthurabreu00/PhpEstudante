<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Exercicío 5 </title>
</head>

<body>
<?php include_once('includes/nav.php'); ?>
    <form method="post">
        <label> 1º Número </label>
        <input type="number" name="num1" />

        <label> 2º Número </label>
        <input type="number" name="num2" />


        <button type="submit"> Resposta </button>
    </form>

    <?php

    $num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;

    $nums = [$num1,$num2];
    sort($nums);

    foreach ($nums as $num) {
        echo $num." ";
    }



    ?>
</body>

</html>