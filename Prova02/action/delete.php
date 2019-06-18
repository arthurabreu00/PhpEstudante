<?php
$id = $_POST['id'];

$conn = mysqli_connect('localhost', 'root', '', 'prova02') or die('Ocorreu um erro ao conectar com o banco de dados');
$query = "DELETE FROM usuario WHERE id=$id;";
$result = mysqli_query($conn, $query);

if ($result)
    $_SESSION['mensagem'] = '<div class="alert alert-primary" role="alert"> Usuario deletado com sucesso </div>';
else
    $_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert"> Ocorreu um erro ao deletado usuario </div>';

header("Location: ../index.php ");