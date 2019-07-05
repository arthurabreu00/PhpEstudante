<?php
include_once 'bd.php';

$arquivo = $_FILES['file'];
$ler = fopen($arquivo['tmp_name'], 'r');

$formArray = [];

while ($row = fgetcsv($ler, 1000, ';')) {
    $query = "INSERT INTO cliente(nome,cpf,data_nascimento) VALUES('$row[0]','$row[1]','$row[2]')";
    mysqli_begin_transaction($conn);
    try {
        mysqli_query($conn, $query);
        mysqli_commit($conn);;
    } catch (mysqli_sql_exception $e) {
        echo $e;
        mysqli_rollback($conn);
    }
}