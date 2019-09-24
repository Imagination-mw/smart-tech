<!DOCTYPE html>
<html>

<head>
    <title>Smart Tech | Home</title>
    <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
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

<section class="container mb-5 mt-3" style="min-height:586px;">
    <h5> <i class="fa fa-cart-arrow-down"></i>&nbsp;Your Cart</h5>
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="">
                <img src="assets/images/placeholder.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lorem ipsum.</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">K 18,0000</li>
                    <li class="list-group-item">Software Products</li>
                    <li class="list-group-item">
                        PROD-QLTY
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="card-link btn btn-sm btn-outline-primary">
                       <i class="fa fa-check-circle"></i>&nbsp;finalize purchase</a>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="card">
                <div class="card-header">
                    Distributor Details
                </div>
                <div class="card-body py-5">
                   <div class="text-center">
                      <i class="fa fa-map-marker"></i>&nbsp;Map Will be shown here
                   </div>
                </div>
            </div>
        </div>
    </div>

</section>

<footer class="bg-primary text-white text-center pt-3">
    <p>Smart Tech.com &copy;2019</p>
</footer>

<script src="assets/jquery-2.1.3.min.js"></script>
<script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>


</html>