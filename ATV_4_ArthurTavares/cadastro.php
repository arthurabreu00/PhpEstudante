<?php
require_once 'auth.php';
include_once 'includes/header.phtml';
include_once 'includes/navbar.phtml';
?>


<div class="container">
    <form class="mt-5" action="action/insert.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input required type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="form-group">
            <label for="perfil">Perfil</label>
            <select required class="form-control" id="perfil" name="perfil">
                <option> Selecione uma opção </option>
                <?php
                require_once 'action/select.php';
                perfil();
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="text">Usuario</label>
            <input required type="text" class="form-control" id="usuario" name="usuario">
        </div>

        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="senha">Senha</label>
                <input required type="password" class="form-control" maxlength="12" id="senha" name="senha" />
            </div>

            <div class="form-group col-md-6">
                <label for="experiracao">Data expiração da senha</label>
                <input type="date" class="form-control" maxlength="12" id="experiracao" name="experiracao" />
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100"> Enviar </button>
    </form>
</div>

<?php
include_once 'includes/footer.phtml';
?>