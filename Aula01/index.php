<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minha primeira página scripts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="php">
    <input type="text" placeholder= "1º Número" name="num1" id="num1"> 
    <input type="text" placeholder= "2º Número" name="num2" id="num2">
    <select name="operador" class="operador">
        <option selected>Selecionar</option>
        <option> Soma </option>
        <option> Subtração </option>
        <option> Divisão </option>
        <option> Multiplicação </option>
    </select>
    <br> <br>
    <button type="submit" name="submit" <value="submit"> Calcular </button>
</form>
<br>
    <div class="php result">
    <?php 

        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operador = $_GET['operador'];
        echo "Resultado da ".$operador." PHP : ".'<span class="res">';

        if($operador !== "Divisão"){
            echo "<br>";
        };

            switch($operador){

            case "Selecionar":
                echo 'Selecione uma operação';
            break;

            case 'Soma':
                echo $num1 + $num2;
            break;

            case 'Subtração':
                echo $num1 - $num2;
            break;

            case 'Divisão':
                echo $num1 / $num2;
            break;

            case 'Multiplicação':
                echo $num1 * $num2;
            break;
        };

        echo "</span>"
        

    ?>


    </div>

    
    <div class="res-js"> 
        Resultado da <span class="nome"></span> JavaScript: <br>
        <span id="res"> </span>
    </div>


<script src="script.js"> </script>
</body>
</html>