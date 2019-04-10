<?php
    session_start();

    $nome = isset($_POST['nome']) ? $_POST['nome'] : 0;
    $nota = isset($_POST['nota']) ? $_POST['nota'] : 0;

    $_SESSION['resultado'] = "oi, $nome sumido $nota";
    header('Location: index.php');

?>