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
       <div class="row">
           <div class="col-sm-4"></div>
           <div class="col-sm-4">
                <div class="card">
                    <div class="card-header py-2">
                        Login
                    </div>
            <div class="card-body">
                <form action="dashboard.php">
                    <div class="form-group">
                        <label for="username" class="control-label">Username</label>
                        <input type="text" class="form-control form-control-sm rounded-0" placeholder="enter your username" >
                    </div>
                    <div class="form-group">
                        <label for="username" class="control-label">Passowrd</label>
                        <input type="password" class="form-control form-control-sm rounded-0" placeholder="type your password">
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary btn btn-sm rounded-0">
                        <i class="fa fa-sign-in-alt"></i>&nbsp;Login
                      </button>
                    </div>
                </form>
            </div>
        </div>
           </div>
           <div class="col-sm-4"></div>
       </div>
       
    </section>

    <footer class="bg-primary text-white text-center pt-3">
        <p>Smart Tech.com &copy;2019</p>
    </footer>

    <script src="assets/jquery-2.1.3.min.js"></script>
    <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>


</html>