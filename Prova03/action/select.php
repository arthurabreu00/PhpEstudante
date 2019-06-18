<?php

function perfil()
{
    include_once 'bd.php';
    $rawQuery = "SELECT id_perfil as 'id', descricao FROM TB_PERFIL WHERE ativo = 1";
    $result = mysqli_query($conn, $rawQuery);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['id'] . '">' . $row['descricao'] . '</option>';
    }
}

function usuarios()
{
    include_once 'bd.php';
    $rawQuery = "SELECT id_usuario,nm_usuario,ds_usuario,dt_inclusao,p.descricao FROM TB_USUARIO u INNER JOIN TB_PERFIL p ON p.id_perfil = u.id_perfil WHERE fl_ativo = 1;";
    $result = mysqli_query($conn, $rawQuery);
    while ($rows = mysqli_fetch_assoc($result)) {

        echo '<tr>';
        foreach ($rows as $row) {
            echo "<td>$row</td>";
        }
        echo "<td> <form class=\"remove\" method=\"POST\"> <button type=\"button\" class=\"btn btn-danger\"> <i class=\"fas fa-trash\"></i> </button> </form> </td>";
        echo '</tr>';
    }
}