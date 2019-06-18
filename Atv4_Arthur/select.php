<table>
    <?php

    require_once 'bd.php';

    $res = mysqli_query($conn, "SELECT * FROM alunos;");

    while ($row = mysqli_fetch_assoc($res)) : ?>
    <tr>
        <td>
            <?php echo $row['nome_aluno']; ?>
        </td>
    </tr>

    <?php endwhile ?>

</table>