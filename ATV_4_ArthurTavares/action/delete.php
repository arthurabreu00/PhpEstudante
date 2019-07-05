<?php
session_start();
include_once 'bd.php';

$id = $_POST['id'];

$query = "UPDATE TB_USUARIO SET fl_ativo = 0 WHERE id_usuario = $id";
$res = mysqli_query($conn, $query);

if (count(mysqli_fetch_assoc($res) > 0)) {
    $_SESSION['msg'] = '<div class="alert alert-success mt-3"> Cadastrado com sucesso !</div>';
    header('Location: ../index.php');
} else {
    $_SESSION['msg'] = '<div class="alert alert-danger mt-3""> Ocorreu um erro ao cadastrar   !</div>';
    header('Location: ../index.php');
}