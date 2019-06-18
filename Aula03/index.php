<?php
include_once('./includes/header.php');

?>

<link rel="stylesheet" href="css/index.css">
<div class="container">

    <div class="row">
        <!--Start include wrapper-->
        <div class="include-wrapper pb-5 col-12">
            <!--SECTION START-->
            <section class="row">
                <!--Start slider news-->
                <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                    <div id="featured" class="carousel slide carousel" data-ride="carousel">
                        <!--slider navigate-->
                        <ol class="carousel-indicators top-indicator">
                            <li data-target="#featured" data-slide-to="0" class="active"></li>
                            <li data-target="#featured" data-slide-to="1"></li>
                            <li data-target="#featured" data-slide-to="2"></li>
                            <li data-target="#featured" data-slide-to="3"></li>
                        </ol>

                        <!--carousel inner-->
                        <div class="carousel-inner">
                            <!--Item slider-->
                            <div class="carousel-item active">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <!--thumbnail-->
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="#">
                                                <img class="img-fluid w-100"
                                                    src="https://bootstrap.news/source/img1.jpg"
                                                    alt="Image description">
                                            </a>
                                        </div>

                                        <!--title-->
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title and description-->
                                            <a href="#">
                                                <h2 class="h3 post-title text-white my-1">
                                                    Lorem, ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                                                </h2>
                                            </a>

                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold"
                                                        href="#"> Nome </a></span>
                                                <span class="news-date">21/03/2019</span>
                                            </div>
                                        </div>
                                        <!--end title-->
                                    </div>
                                    <!--end thumbnail-->
                                </div>
                            </div>

                            <!--Item slider-->
                            <div class="carousel-item">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <!--thumbnail-->
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="#">
                                                <img class="img-fluid w-100"
                                                    src="https://bootstrap.news/source/img2.jpg"
                                                    alt="Image description">
                                            </a>
                                        </div>

                                        <!--title-->
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title and description-->
                                            <a href="#">
                                                <h2 class="h3 post-title text-white my-1">Fome</h2>
                                            </a>

                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold"
                                                        href="../category/author.html"> To com </a></span>
                                                <span class="news-date">22/03/2018</span>
                                            </div>
                                        </div>
                                        <!--end title-->
                                    </div>
                                    <!--end thumbnail-->
                                </div>
                            </div>

                            <!--Item slider-->
                            <div class="carousel-item">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <!--thumbnail-->
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="#">
                                                <img class="img-fluid w-100"
                                                    src="https://bootstrap.news/source/img3.jpg"
                                                    alt="Image description">
                                            </a>
                                        </div>

                                        <!--title-->
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title and description-->
                                            <a href="#">
                                                <h2 class="h3 post-title text-white my-1">TO TICOLEEE</h2>
                                            </a>

                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold"
                                                        href="../category/author.html">TICOLE</a></span>
                                                <span class="news-date">22/03/2019</span>
                                            </div>
                                        </div>
                                        <!--end title-->
                                    </div>
                                    <!--end thumbnail-->
                                </div>
                            </div>

                            <!--Item slider-->
                            <div class="carousel-item">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <!--thumbnail-->
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="#">
                                                <img class="img-fluid w-100"
                                                    src="https://bootstrap.news/source/img4.jpg"
                                                    alt="Image description">
                                            </a>
                                        </div>

                                        <!--title-->
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title and description-->
                                            <a href="#">
                                                <h2 class="h3 post-title text-white my-1">SEI LÁ</h2>
                                            </a>

                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold"
                                                        href="../category/author.html"> AIAIAII</a></span>
                                                <span class="news-date">22/03/2019</span>
                                            </div>
                                        </div>
                                        <!--end title-->
                                    </div>
                                    <!--end thumbnail-->
                                </div>
                            </div>
                            <!--end item slider-->
                        </div>
                        <!--end carousel inner-->
                    </div>
                    <!--navigation-->
                    <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Proximo</span>
                    </a>
                </div>
                <!--End slider news-->

                <!--Start box news-->
                <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                    <div class="row">
                        <!--news box-->
                        <div class="col-6 pb-1 pt-0 pr-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <!--thumbnail-->
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid" src="https://bootstrap.news/source/img5.jpg"
                                                alt="Image description">
                                        </a>
                                    </div>

                                    <!--title-->
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">MALUCO DE BIKE</a>

                                        <!--title and description-->
                                        <a href="#">
                                            <h2 class="h5 text-white my-1"> Me desceu mais uma chefeeee </h2>
                                        </a>
                                    </div>
                                    <!--end title-->
                                </div>
                                <!--end thumbnail-->
                            </div>
                        </div>

                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-0">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <!--thumbnail-->
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid" src="https://bootstrap.news/source/img6.jpg"
                                                alt="Image description">
                                        </a>
                                    </div>

                                    <!--title-->
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#"> Maluco de moto </a>

                                        <!--title and description-->
                                        <a href="#">
                                            <h2 class="h5 text-white my-1">
                                                Raffa moreira, mano , 777
                                            </h2>
                                        </a>
                                    </div>
                                    <!--end title-->
                                </div>
                                <!--end thumbnail-->
                            </div>
                        </div>

                        <!--news box-->
                        <div class="col-6 pb-1 pr-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <!--thumbnail-->
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid" src="https://bootstrap.news/source/img7.jpg"
                                                alt="Image description">
                                        </a>
                                    </div>

                                    <!--title-->
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#"> Maluco dos ferro </a>

                                        <!--title and description-->
                                        <a href="#">
                                            <h2 class="h5 text-white my-1">
                                                Vem monstroooooo
                                            </h2>
                                        </a>
                                    </div>
                                    <!--end title-->
                                </div>
                                <!--end thumbnail-->
                            </div>
                        </div>

                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <!--thumbnail-->
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid" src="https://bootstrap.news/source/img8.jpg"
                                                alt="Image description">
                                        </a>
                                    </div>

                                    <!--title-->
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#"> Maluco de cavalo </a>

                                        <!--title and description-->
                                        <a href="#">
                                            <h2 class="h5 text-white my-1">
                                                GALOPERAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                                            </h2>
                                        </a>
                                    </div>
                                    <!--end title-->
                                </div>
                                <!--end thumbnail-->
                            </div>
                        </div>
                        <!--end news box-->
                    </div>
                </div>
                <!--End box news-->
            </section>
            <!--END SECTION-->
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="zoom col-md-4">
                            <img src="img/banco_dados.jpg">
                        </div>
                        <div class="col-md-8">
                            <div class="news-title">
                                <a href="#">
                                    <h5> Banco de dados </h5>
                                </a>
                            </div>
                            <div class="news-content">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A eum quod dolores
                                    cupiditate, optio natus ipsa eveniet cumque quos tempora perferendis ullam iusto
                                    recusandae nulla commodi delectus temporibus ea quas. </p>
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


    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="zoom col-md-4">
                            <img src="img/banco_dados.jpg">
                        </div>
                        <div class="col-md-8">
                            <div class="news-title">
                                <a href="#">
                                    <h5> Banco de dados </h5>
                                </a>
                            </div>
                            <div class="news-content">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A eum quod dolores
                                    cupiditate, optio natus ipsa eveniet cumque quos tempora perferendis ullam iusto
                                    recusandae nulla commodi delectus temporibus ea quas. </p>
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

</div>
<?php
include_once('./includes/footer.php')
?>