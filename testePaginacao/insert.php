<?php

include_once('bd.php');

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, "http://www.wjr.eti.br/nameGenerator/index.php?q=80&o=json");
$resultado = curl_exec($ch);
curl_close($ch);



$nomes = json_decode($resultado, true);

foreach ($nomes as $nome) {
    mysqli_set_charset($conn, 'utf8');
    mysqli_query($conn, "INSERT INTO usuario(nome) VALUES ('$nome')");
}

if (mysqli_error($conn)) {
    echo mysqli_error($conn);
} else {
    echo "Dados inseridos com suceso";
}