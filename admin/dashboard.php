<!DOCTYPE html>
<html>

<head>
    <title>Smart Tech | Dashboard</title>
    <link rel="stylesheet" href="../assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-5.7.1-web/css/all.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/roboto300.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-0">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">
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
                        <i class="fa fa-user-circle"></i>&nbsp;Stella
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">
                        <i class="fa fa-sign-out-alt"></i>&nbsp;Logout
                    </a>
                </li>

            </ul>
        </div>
    </div>

</nav> <!-- ./ nav-->
<section class="container mb-4">
    <div class="mt-2">
        <h5>Dashboard</h5>
        <hr>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fa fa-users" style="font-size:300%"></i>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="clients/index.php" class="btn btn-secondary btn-sm btn-block">Clients</a>
                </div>
            </div>
        </div><!-- ./ clients -->
        <div class="col-sm-2">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fa fa-users" style="font-size:300%"></i>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="distributors/index.php" class="btn btn-secondary btn-sm btn-block">Distributors</a>
                </div>
            </div>
        </div><!-- ./ Distributors -->
        <div class="col-sm-2">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fa fa-boxes" style="font-size:300%"></i>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="products/index.php" class="btn btn-secondary btn-sm btn-block">Products</a>
                </div>
            </div>
        </div><!-- ./ clients -->
        <div class="col-sm-2">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fa fa-star" style="font-size:300%"></i>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="ratings.php" class="btn btn-secondary btn-sm btn-block">Ratings</a>
                </div>
            </div>
        </div><!-- ./ clients -->
        <div class="col-sm-2">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fa fa-money-bill-alt" style="font-size:300%"></i>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="sales/index.php" class="btn btn-secondary btn-sm btn-block">Sales</a>
                </div>
            </div>
        </div><!-- ./ clients -->
        <div class="col-sm-2">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fa fa-user-lock" style="font-size:300%"></i>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="users/index.php" class="btn btn-secondary btn-sm btn-block">Users</a>
                </div>
            </div>
        </div><!-- ./ clients -->
    </div>
</section>

<script src="assets/jquery-2.1.3.min.js"></script>
<script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>


</html>