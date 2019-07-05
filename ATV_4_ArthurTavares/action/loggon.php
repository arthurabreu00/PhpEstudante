<?php
session_start();
include_once 'bd.php';
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);


$query  = "SELECT u.nm_usuario,u.ds_usuario,u.id_perfil, ds_senha_cripto FROM TB_USUARIO u INNER JOIN
TB_SENHA p ON p.id_usuario = u.id_usuario
WHERE
ds_usuario = '$usuario'
AND 
ds_senha_cripto = '$senha'";

$res = mysqli_query($conn, $query);
$rows = mysqli_fetch_assoc($res);
if (count($rows) > 0) {
    $_SESSION['nome'] = $rows['nm_usuario'];
    $_SESSION['perfil'] = $rows['id_perfil'];
    $_SESSION['logged'] = true;
    header('Location: ../index.php');
} else {
    $_SESSION['logged'] = false;
    $_SESSION['msg'] = '<div class="alert alert-danger"> Não foi possivel autentificar </div>';
    header('Location: ../login.php');
}