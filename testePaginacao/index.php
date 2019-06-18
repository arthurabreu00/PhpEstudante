<?php

require_once('bd.php');

// Configurações. 
$maxItens = 10; // Número de itens por pagina.
$page = (isset($_GET['pagina']) ? intval($_GET['pagina']) : 0); // Pagina Atual.

// Buscando informações a serem mostradas do banco.

$pagesSql = $page * $maxItens; // Para pegar o dado de 10 em 10.
$sql = "SELECT * FROM usuario LIMIT $pagesSql,$maxItens"; // Selecionando os itens a serem mostrados;
$execute = mysqli_query($conn, $sql); // Guardando informação.

// Calculo de número de paginas total.
$numTotal =  mysqli_query($conn, "SELECT * FROM usuario")->num_rows; // Número de linhas total no banco.
$maxPages = round($numTotal / $maxItens); // Número total de paginas retornadas.

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <h1> Nomes </h1>

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Mostrando dados do banco.
                        while ($nome = $execute->fetch_assoc()) {
                            ?>
                        <tr>
                            <td>
                                <?php echo utf8_encode($nome['id']);
                                    ?>
                            </td>
                            <td>
                                <?php echo utf8_encode($nome['nome'])
                                    ?>
                            </td>
                        </tr>

                        <?php
                    }
                    ?>
                    </tbody>

                </table>

                <footer aria-label="Navegação de página exemplo">

                    <?php
                    $disablePrev = $page == 0 ? 'disabled' : '';
                    $disableProx = $page == $maxPages - 1 ? 'disabled' : '';
                    ?>

                    <ul class="pagination">
                        <li class="page-item <?php echo $disablePrev ?>">
                            <a class="page-link" href="?pagina=<?php echo $page <= 0 ?  0 : $page - 1 ?>">
                                Anterior
                            </a>
                        </li>

                        <?php for ($i = 0; $i < $maxPages; $i++) {
                            $active = $page == $i ?  'active' : ''; ?>

                        <li class="page-item <?php echo $active ?>">
                            <a class="page-link" href="?pagina=<?php echo $i; ?>">
                                <?php echo $i + 1; ?>
                            </a>
                        </li>

                        <?php } ?>

                        <li class="page-item <?php echo $disableProx ?>"><a class="page-link"
                                href="?pagina=<?php echo $page >= $maxPages - 1 ?  $numPage : $page + 1; ?>">Próximo</a>
                        </li>
                    </ul>
                </footer>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>