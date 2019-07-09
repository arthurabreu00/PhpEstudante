<?php
require "bd.php";

$res = mysqli_query($conn, "SELECT titulo_noticia,conteudo_noticia FROM  noticia");
while ($rows = mysqli_fetch_assoc($res)) : ?>

<div class="row mb-2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="zoom col-md-4">
                        <img src="img/2753.png">
                    </div>
                    <div class="col-md-8">
                        <div class="news-title">
                            <a href="#">
                                <h5> <?php echo $rows['titulo_noticia'] ?> </h5>
                            </a>
                        </div>
                        <div class="news-content">
                            <p>
                                <?php echo utf8_encode($rows['conteudo_noticia']) ?>
                            </p>
                        </div>
                        <div class="news-buttons">
                            <button type="button" class="btn btn-outline-danger btn-sm"> Leia mais </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile; ?>