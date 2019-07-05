<?php

$conn = mysqli_connect('10.14.93.20', 'root', '123456', 'DB_ARTHUR_TAVARES');
mysqli_set_charset($conn, 'utf8');
if (mysqli_errno($conn)) {
    throw 'Ocorreu o erro ao conectar com o banco de dados';
}