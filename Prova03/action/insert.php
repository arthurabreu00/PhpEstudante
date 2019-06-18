<?php
session_start();
include_once 'bd.php';

$nome = $_POST['nome'];
$perfil = $_POST['perfil'];
$usuario = $_POST['usuario'];
$experiracao = $_POST['experiracao'];
$senha = md5($_POST['senha']);

try {
    mysqli_begin_transaction($conn);
    mysqli_query($conn, "INSERT INTO TB_USUARIO(nm_usuario,ds_usuario,id_perfil) VALUES('$nome','$usuario',$perfil)");
    $res = mysqli_query($conn, "SELECT id_usuario FROM TB_USUARIO ORDER BY id_usuario DESC LIMIT 1");
    $id = mysqli_fetch_assoc($res)['id_usuario'];
    mysqli_query($conn, "INSERT INTO TB_SENHA(dt_expiracao,id_usuario,ds_senha_cripto) VALUES('$experiracao',$id,'$senha');");
    mysqli_commit($conn);
    $_SESSION['msg'] = '<div class="alert alert-success"> Cadastrado com sucesso !</div>';
    header('Location: ../index.php');
} catch (Exception $e) {
    mysqli_rollback($conn);
    $_SESSION['msg'] = '<div class="alert alert-danger"> Ocorreu um erro ao cadastrar !</div>';
    header('Location: ../index.php');
}