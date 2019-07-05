<?php
session_start();
include_once 'includes/header.phtml';
?>
<link rel="stylesheet" href="css/login.css">

<form class="form-signin text-center" method="POST" action="action/loggon.php">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <h1 class="h3 font-weight-normal">Faça login</h1>
    <label for="usuario" class="sr-only">Endereço de email</label>
    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>

    <label for="senha" class="sr-only">Senha</label>
    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
</form>