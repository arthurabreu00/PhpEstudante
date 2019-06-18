<?php

$conn = mysqli_connect('localhost', 'root', '', 'prova02') or die('Ocorreu um erro ao conectar com o banco de dados');
$query = 'SELECT * FROM usuario';
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    foreach ($row as $data) {
        echo '<td>';
        echo $data;
        echo '</td>';
    }

    echo "<td> <form class=\"d-inline\" method=\"GET\" action=\"atualizar.php\">
    <input type=\"hidden\" name=\"id\" value=\"" . $row['id'] . "\">
    <button type=\"submit\" class=\"btn btn-success\"> <i class=\"fas fa-user-edit\"></i> </button> </form> ";

    echo " <form method=\"POST\" class=\"d-inline\"  onsubmit=\"excluir(event)\" action=\"action/delete.php\" >
    <input type=\"hidden\" name=\"id\" va value=\"" . $row['id'] . "\">
    <button type=\"submit\" class=\"btn btn-danger\"> <i class=\"fas fa-trash\"></i> </button> </form>  </td>";

    echo '</tr>';
}