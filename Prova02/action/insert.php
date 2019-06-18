<?php
session_start();


$usuario = $_POST['user'] or '';
$nome = $_POST['name'] or '';
$data = $_POST['datanascimento'] or '';
$cpf = $_POST['cpf'] or '';
$perfil = $_POST['perfil'] or '';

$conn = mysqli_connect('localhost', 'root', '', 'prova02') or die('Ocorreu um erro ao conectar com o banco de dados');

$query = "INSERT INTO usuario(usuario,nome,data_nasc,cpf,perfil) VALUES('$usuario','$nome','$data','$cpf','$perfil')";

$result = mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0)
    $_SESSION['mensagem'] = '<div class="alert alert-primary" role="alert"> Usuario Inserido com sucesso </div>';
else
    $_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert"> Ocorreu um erro ao inserir usuario </div>';

header("Location: ../index.php ");