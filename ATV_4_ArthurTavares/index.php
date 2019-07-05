<?php
require_once 'auth.php';
include_once 'includes/header.phtml';
include_once 'includes/navbar.phtml';
?>


<div class="container">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    } ?>
    <table class="table mt-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome </th>
                <th>Usuario</th>
                <th>Data de Inclusão</th>
                <th>Perfil</th>
                <th>Ações</th>
            </tr>

        </thead>
        <tbody>
            <?php
            require_once 'action/select.php';
            usuarios();
            ?>
        </tbody>
    </table>
</div>
<?php
include_once 'includes/footer.phtml';
?>