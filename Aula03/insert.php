<?php

require "bd.php";

$perfil = " SELECT * FROM tb_perfil ";
$result_perfil = mysqli_query($conn, $perfil);

$arquivo = $_FILES["arquivo"];
$read = fopen($arquivo["tmp_name"], "r");

$contador = 0;
while ($linha = fgetcsv($read, 1000, ";")) {
    if ($contador > 0) {
        $query = "INSERT INTO noticia (titulo_noticia,conteudo_noticia,usuario_id_usuario,perfil_id_perfil,imagem_noticia,data_noticia,id_menu)values('$linha[0]','$linha[1]','$linha[2]','$linha[3]','$linha[4]','$linha[5]','$linha[6]')";


        mysqli_query($conn, $query);
    }

    $contador++;
}

if (mysqli_affected_rows($conn) > 0) {
    header('Location: index.php');
} else {
    header('Location: admin.php');
}