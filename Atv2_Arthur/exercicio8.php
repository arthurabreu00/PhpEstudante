<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Exercicío 1 </title>
</head>
<body>
<?php include_once('includes/nav.php'); ?>
    <form method="post">
        <label> Salário </label>
        <input type="text" name="sal" />
        <button type="submit"> Calcular </button>
    </form>

    <?php

        $sal = isset($_POST['sal']) ? $_POST['sal'] : 0;

        $reajuste = $sal <= 300 ? $sal *= 1.5 : $sal *= 1.3;

        echo "Salário reajustado: $reajuste"
    ?>

</body>
</html>