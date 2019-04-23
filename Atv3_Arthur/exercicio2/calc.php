<?php

$num1 = $_POST['num1'];
$fatorial = 1;

for($i = $num1; $i > 1; $i--){
    $fatorial *= $i; 
}

echo $fatorial;