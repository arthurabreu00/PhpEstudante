<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <form method="post">
        <input type="text" name="num0" id="num0">
        <input type="text" name="num1" id="num1">
        <input type="text" name="num2" id="num2">
        <input type="text" name="num3" id="num3">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>


<?php 

    $numeros = [];
    $soma = 0;

    for ($i=0; $i < 4 ; $i++) { 
       $add = isset($_POST['num'.$i]) ? $_POST['num'.$i] : 0;
       array_push($numeros,$add);
       $soma += $numeros[$i];
    }

    $media = $soma / count($numeros);

    echo 'A média obtida pela aluno foi: ' . $media;
    echo '<br>'. ($media > 60 ? ' Aprovado': ' Reprovado');


?>