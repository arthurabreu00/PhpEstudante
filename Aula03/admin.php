<?php
include_once('./includes/header.php');
if (isset($_SESSION['logged']) && $_SESSION['logged']) : ?>

<div class="container" style="padding-top: 6rem">
    <form action="insert.php" enctype="multipart/form-data" method="POST">
        <div class="form-group">
            <label for="exampleFormControlFile1"> Exemplo de input de arquivo </label>
            <input type="file" class="form-control-file" name="arquivo">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="download.php" class="btn btn-success"><i class="fa fa-arrow-down" aria-hidden="true"></i>
            Download</a>
    </form>
</div>


<?php
endif;

include_once('./includes/footer.php')
?>