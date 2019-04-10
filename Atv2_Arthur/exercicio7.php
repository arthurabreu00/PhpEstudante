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
        <label> Altura em metros </label>
        <input type="text" name="altura" />

        <label> Sexo </label>

        <select name="sexo">
         
            <option value="f"> Feminino </option>
            <option value="m"> Masculino </option>
        </select>

        <button type="submit"> Peso ideal </button>
    </form>

    <?php 
    
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
    $altura = isset($_POST['altura']) ? $_POST['altura'] : 0;
    $pesoIdeal = round($sexo == $sexo ? ((62.1 * $altura) - 44.7) : ((72.7 * $altura) - 58),2);
    echo "O Seu peso é ideal é: $pesoIdeal Kg";

    ?>

</body>
</html>