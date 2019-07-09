<?php
header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=file.csv");
header("Content-Transfer-Encoding: binary");
header("Pragma: no-cache");

require_once 'bd.php';
$results = [['id', 'titulo', 'subtitulo', "user", 'perfil', "algo", 'data', 'id_menu']];
$res = mysqli_query($conn, "SELECT * FROM noticia");

while ($rows = mysqli_fetch_assoc($res)) {
    $results[] = $rows;
}

//Criação do Arquivo csv sobre os dados obtidos de um SQL
$out = fopen('php://output', 'w');

foreach ($results as $result) {
    fputcsv($out, $result, ';');
}

fclose($out);