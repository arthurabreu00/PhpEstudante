<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Atividade 2</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
        <h1  class="center"> Ficha do Aluno </h1>


    <form class="center" action="ficha.php" method="POST">

       <input type="text" name="nome" placeholder="Nome" >  
  
       <input type="text" name="nota" placeholder="Primeira Nota"  >

       <input type="text" name="nota2" placeholder="Segunda Nota"  >

       <input type="text" name="nota3" placeholder="Terceira Nota"  >
       <button type="submit" class="bnt-calculo"> Resultado </button>
    </form>

    <h1 class="center" >
        <?php  isset($_SESSION['resultado']) ? print_r ($_SESSION['resultado']) : "";  ?>
    </h1>


</body>
</html>