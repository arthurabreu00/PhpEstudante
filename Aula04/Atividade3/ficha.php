<?php
    session_start();

    $nome = isset($_POST['nome']) ? $_POST['nome'] : 0;
    $nota = isset($_POST['nota']) ? $_POST['nota'] : 0;
    $nota1 = isset($_POST['nota2']) ? $_POST['nota2'] : 0;
    $nota2 = isset($_POST['nota3']) ? $_POST['nota3'] : 0;
    

    $_SESSION['resultado'] = ($nota + $nota1 + $nota2)/3;
    header('Location: index.php');

?>