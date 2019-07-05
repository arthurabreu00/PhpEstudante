<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'teste';

$conn = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Erro ao conectar com o banco";
}