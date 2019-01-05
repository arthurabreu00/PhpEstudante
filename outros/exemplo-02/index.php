<?php 
    session_start(); # Deve ser a primeira linha do arquivo
    // iniciando uma sessão PHP.
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <form method="post" action="media.php">
        <input type="text" name="num0" id="num0">
        <input type="text" name="num1" id="num1">
        <input type="text" name="num2" id="num2">
        <input type="text" name="num3" id="num3">
        <button type="submit">Calcular</button>
    </form>

    <?php echo $_SESSION['resultado'];?> 


</body>
</html>

