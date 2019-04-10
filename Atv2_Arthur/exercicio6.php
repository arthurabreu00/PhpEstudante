<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Exercicío 6 </title>
</head>
<body>
<?php include_once('includes/nav.php'); ?>
    <form method="post">
        <label> 1º Nota </label>
        <input type="number" name="nota1" />

        <label> 2º Nota </label>
        <input type="number" name="nota2" />

        <label> 3º Nota </label>
        <input type="number" name="nota3" />

        <label> 4º Nota </label>
        <input type="number" name="nota4" />




        <button type="submit"> Resposta </button>
    </form>

    <?php

    $nota1 = isset($_POST['nota1']) ? $_POST['nota1'] : 0;
    $nota2 = isset($_POST['nota2']) ? $_POST['nota2'] : 0;
    $nota3 = isset($_POST['nota3']) ? $_POST['nota3'] : 0;
    $nota4 = isset($_POST['nota4']) ? $_POST['nota4'] : 0;

    $media = ($nota1 + $nota2 + $nota2 + $nota4) / 4;
    
    echo $media >= 7 ? 'Aprovado' : 'Reprovado';
    echo "<p> Sua média foi $media </p>";
    ?>
</body>
</html>