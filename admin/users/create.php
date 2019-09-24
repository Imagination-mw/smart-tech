<!DOCTYPE html>
<html>

<head>
    <title>Smart Tech | Add User</title>
    <link rel="stylesheet" href="../../assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/fontawesome-free-5.7.1-web/css/all.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <link rel="stylesheet" href="../../assets/css/roboto300.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-0">
    <div class="container">
        <a class="navbar-brand" href="../dashboard.php">
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
        <h5>Add User</h5>
        <hr>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control form-control-sm rounded-0">
                        </div>
                        <div class="form-group">
                            <label for="">Type</label>
                            <select name="type" class="form-control form-control-sm rounded-0">
                                <option value="admin">Admin</option>
                                <option value="std">Standard</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control form-control-sm rounded-0">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control form-control-sm rounded-0">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-sm btn-primary rounded-0 btn-block">
                                <i class="fa fa-save"></i>&nbsp;Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<script src="assets/jquery-2.1.3.min.js"></script>
<script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>


</html>