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

    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'prova02') or die('Ocorreu um erro ao conectar com o banco de dados');
    $query = 'SELECT * FROM usuario WHERE id =' . $_GET['id'];
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    var_dump($row);
    ?>
</head>

<body>
    <div class="container mt-5">
        <h1>Atualização de Usuário</h1>
        <form action="action/update.php" method="POST">
            <div class="form-group">
                <label for="id">Usuario</label>
                <input type="text" class="form-control" name="id" value=<?php echo $row['id'] ?> readonly id="id">
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" class="form-control" name="user" value=<?php echo $row['usuario'] ?> id="user">
            </div>

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" id="name" value=<?php echo $row['nome'] ?> />
            </div>


            <div class="form-group">
                <label for="datanascimento">Data de Nascimento</label>
                <input type="date" class="form-control" name="datanascimento" value=<?php echo $row['data_nasc'] ?>
                    id="data-nascimento">
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" value=<?php echo $row['cpf'] ?>>
            </div>

            <div class="form-group">
                <label for="perfil">Perfil</label>
                <input type="text" class="form-control" name="perfil" value=<?php echo $row['perfil'] ?> id="perfil">
            </div>

            <button type="submit" class="btn btn-primary w-100"> Atualizar </button>

        </form>
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