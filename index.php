<!DOCTYPE html>
<html>

<head>
    <title>Smart Tech | Home</title>
    <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-free-5.7.1-web/css/all.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/roboto300.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-0">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <i class="fa fa-desktop"></i>&nbsp;Smart Tech
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="cart.php">
                        <i class="fa fa-shopping-cart"></i>&nbsp;<span class="badge badge-light">1</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="products.php">
                        <i class="fa fa-boxes"></i>&nbsp;Products
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">
                        <i class="fa fa-user-plus"></i>&nbsp;Register
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">
                        <i class="fa fa-sign-in-alt"></i>&nbsp;Login
                    </a>
                </li>

            </ul>
        </div>
    </div>

</nav> <!-- ./ nav-->

<div id="head">
    <div class="container text-center">
        <div class="px-0 pt-5">
            <h3>Welcome to Smart Tech</h3>
            <hr class="hr-custom">
            <section id="welcome-message" class="pt-0">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium amet aperiam architecto
                    consequatur, debitis delectus distinctio, earum facilis fugiat ipsum iure iusto libero magnam
                    necessitatibus nesciunt officia, officiis perspiciatis porro quae quibusdam repellat sapiente sequi
                    similique ullam velit voluptate? Aut commodi culpa eligendi esse, minima natus nemo perspiciatis
                    veniam.
                </p>
                <div class="mt-4 pt-5">
                    <a href="register.php" class="btn btn-primary btn-sm rounded-0">
                        <i class="fa fa-sign-in-alt"></i>&nbsp;Register</a>
                    <a href="products.php" class="btn btn-primary btn-sm rounded-0">
                        <i class="fa fa-luggage-cart"></i>&nbsp;Shop</a>
                </div>

            </section>
        </div>

    </div>
</div>
<section class="container mb-2">
    <div class="row">
        <div class="col-sm-8">
            <h3>Trending Products</h3>
            <hr>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/banner.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/banner.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/banner.jpg" class="d-block w-100" alt="...">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="card mt-2">
                <div class="card-body bg-light">
                    <div class="trending-list">
                        <div class="media">
                            <img src="assets/images/banner.jpg" class="mr-3 w-25" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0">Smart Ads</h5>
                                An intelligent dashboard for managing social networking site advertisements
                            </div>
                        </div><!-- ./ product item-->
                        <div class="media">
                            <img src="assets/images/placeholder.jpg" class="mr-3 w-25" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0">Lorem ipsum dolor.</h5>
                                Lorem ipsum dolor sit amet, consectetur adipisicing. <br>
                                <small>
                                    <a href=""> <i class="fa fa-cart-plus"></i>&nbsp;Purchase</a>
                                </small>
                            </div>
                        </div><!-- ./ product item-->
                        <div class="media">
                            <img src="assets/images/placeholder.jpg" class="mr-3 w-25" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0">Lorem ipsum dolor.</h5>
                                Lorem ipsum dolor sit amet, consectetur adipisicing. <br>
                                <small>
                                    <a href=""> <i class="fa fa-cart-plus"></i>&nbsp;Purchase</a>
                                </small>
                            </div>
                        </div><!-- ./ product item-->
                        <div class="media">
                            <img src="assets/images/placeholder.jpg" class="mr-3 w-25" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0">Lorem ipsum dolor.</h5>
                                Lorem ipsum dolor sit amet, consectetur adipisicing. <br>
                                <small>
                                    <a href=""> <i class="fa fa-cart-plus"></i>&nbsp;Purchase</a>
                                </small>
                            </div>
                        </div><!-- ./ product item-->
                    </div>
                </div>
            </div>

        </div><!-- ./ first col-->
        <div class="col-sm-4">

            <div class="card mt-5">
                <img src="assets/images/placeholder.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">GIS QUick</h5>
                    <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A commodi doloribus est illum laboriosam laudantium minima nostrum quis, quo. Temporibus.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">K 12,999</li>

                </ul>
                <div class="card-body py-2">
                    <a href="#" class="card-link btn btn-primary btn-sm rounded-0">
                        <i class="fa fa-cart-plus"></i>&nbsp;Purchase
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>


<footer class="bg-primary text-white text-center pt-3 pb-1">
    <small>&copy;smart-tech.com &middot;&nbsp;2019 &middot;All Rights Reserved</small>
</footer>

<script src="assets/jquery-2.1.3.min.js"></script>
<script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>


</html>