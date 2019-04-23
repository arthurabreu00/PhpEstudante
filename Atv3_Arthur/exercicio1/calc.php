<?php

// 1ª Formula: pow($b,2) - 4*$a*$c.
$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];

$delta = pow($b,2) - 4*$a*$c;

$x1 = (($b*-1) + sqrt($delta)) / 2*$a;
$x2 = (($b*-1) - sqrt($delta)) / 2*$a;

if($delta < 0) echo 'Expressão invalida.';
else{
    echo "X¹ = $x1 <br />";
    echo "X² = $x2 <br />";
}