<?php


$conn = mysqli_connect('localhost', 'root', '', 'bd_noticias');

if (mysqli_connect_errno($conn)) {
    throw new Exception('Ocorreu um erro a conexão no banco!');
}