<?php
session_start();

$nome = $_POST['nome']; // Informações recebidas via post
$dataNascimento = $_POST['data'];

$anoAdmissao = date('Y'); // Pegando o ano atual.

require_once('bd.php'); // Requirindo os dados da conexão com o banco de dados.

$firstQuery = mysqli_query($conn, 'SELECT ra FROM alunos ORDER BY ra DESC LIMIT 1;');

$lastRa = mysqli_fetch_array($firstQuery)[0];
$lastRa++;

$query = "INSERT INTO alunos VALUES ('$lastRa','$nome','$anoAdmissao','$dataNascimento')";


$_SESSION['mensagem'] =  mysqli_query($conn, $query) ?
    '
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong> Cadastrado com sucesso ! </strong> 
</div>
' : ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong> Ocorreu um erro, durante o cadastramento ! </strong> 
</div>';

header('Location: index.php');