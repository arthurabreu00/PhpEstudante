<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Atividade 1</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
        <h1 class="center"> Calculo Simples </h1>


    <form class="center" action="calculo.php" method="POST">
       <input type="number" name="num1" class="calculo"> 
       <div class="center">
        +
       </div>
       <input type="number" name="num2"  class="calculo">
       <button type="submit" class="bnt-calculo"> Calcular </button>
    </form>

    <h1 class="center">
        <?php  isset($_SESSION['resultado']) ? print_r ($_SESSION['resultado']) : "";  ?>
    </h1>


</body>
</html>