<?php

$server = 'localhost';
$user = 'root';
$password = '';
$bd = 'testePaginacao';

$conn = mysqli_connect($server, $user, $password, $bd);

if (mysqli_connect_errno()) {
    echo "Ocorreu um erro durante a conexão";
}