<?php
session_start();
include_once 'bd.php';
$email = $_POST['user'];
$senha = $_POST['password'];



$sql = "SELECT 
u.nm_usuario,a.*
FROM
acesso a
   INNER JOIN
usuario u ON id_user = id_usuario 
WHERE 
    email_user = '$email'
    AND 
    password_user = '$senha'";

$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);


if (count($result) > 0) {
    $_SESSION['logged'] = true;
    $_SESSION['name'] = $result['nm_usuario'];
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert"> Logado com sucesso. </div>';
} else {
    $_SESSION['logged'] = false;
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert"> Erro ao Logar. </div>';
};

header('Location: ./index.php');