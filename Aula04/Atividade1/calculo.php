<?php
    session_start();

    $num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;

    $_SESSION['resultado'] = $num1 + $num2;
    header('Location: index.php');

?>