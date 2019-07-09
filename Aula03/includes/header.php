<?php session_start() ?>
<!doctype html>
<html lang="pt-BR">

<head>
    <title> Notícias </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php"> E-noticias </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-6" id="collapsibleNavId">
            <ul class="navbar-nav flex-collum ml-md-auto d-md-flex">



                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>

                <?php if (!isset($_SESSION['logged']) || !$_SESSION['logged']) : ?>
                <li class="nav-item dropdown active">
                    <a class="nav-link btn btn-primary dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                        aria-labelledby="navbarDropdownMenuLink">
                        <form class="form-login px-4 py-3" method="POST" action="authentication.php">
                            <div class="form-group">
                                <label> Usuário </label>
                                <input type="text" id="user" name="user" data-item="Usuario" class="form-control"
                                    placeholder="Usuário">
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" id="password" name="password" data-item="Senha"
                                    class="form-control" placeholder="Senha">
                            </div>
                            <button type="submit" class="btn btn-primary"> Entrar </button>
                        </form>
                        <hr class="dropdown-divider">

                        <a class="dropdown-item" href="#">Esqueceu a senha?</a>

                    </div>
                </li>
                <?php endif ?>

                <?php if (isset($_SESSION['logged']) && $_SESSION['logged']) : ?>
                <li class="nav-item dropdown active"></li>

                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Administração</a>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link btn btn-primary dropdown-toggle" href="#" id="logado" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i> Bem vindo
                        <?php echo $_SESSION['name'] ?></a>


                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" aria-labelledby="logado">
                        <div class="form-login px-4 py-3">
                            <i class="fas fa-cogs"></i>
                            <a href="logout.php"> Sair </a>
                        </div>
                        <hr class="dropdown-divider">
                    </div>
                </li>

                <?php endif ?>



            </ul>
        </div>
    </nav>