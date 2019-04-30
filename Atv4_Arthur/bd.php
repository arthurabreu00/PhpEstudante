<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'atividade2';

$conn = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Erro ao conectar com o banco";
}