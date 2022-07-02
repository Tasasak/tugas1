<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventory</title>
    <link rel="shorcut icon" href="icons/supply.svg">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-image : background-image: linear-gradient(rgba(0.5, 0.5, 0.5, 0.5), rgba(0.5, 0.5, 0.5, 0.5)), url("icons/nb.jpg");
        background-size: cover;
    }
</style>
<body>
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark default-color">
        <a class="navbar-brand"> <img src="icons/supply.svg" width="25px"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php"> <img src="icons/home.svg" width="15px"> Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?p=katalog"> <img src="icons/goods.svg" width="15px"> Katalog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?p=order"> <img src="icons/goods.svg" width="15px"> Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?p=supplier"> <img src="icons/supplier.svg" width="15px"> Supplier</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="?p=jenis"> <img src="icons/stock.svg" width="15px"> Jenis Barang</a>
            </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <strong>Contact : </strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="https://www.instagram.com/mfajrihusaini02/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="https://m.me/mfajrihusaini" target="_blank">
                        <i class="fab fa-facebook-messenger"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="https://api.whatsapp.com/send?phone=6282381944389" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="https://twitter.com/mfajrihusaini02" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                            if ($_SESSION['level']=='administrator') {
                                echo 'Administrator';
                            } else {
                                echo 'User';
                            }
                        ?>
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="?p=profil"> <img src="icons/user.svg" width="20px">  Profil</a>
                        <a class="dropdown-item" href="login.php"> <img src="icons/login.svg" width="20px">  Log In</a>
                        <a class="dropdown-item" href="logout.php"> <img src="icons/exit.svg" width="20px">  Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->

    <div class="container">
        <div class="col-sm">
            <?php
                $page=isset($_GET['p']) ? $_GET['p'] : '';
                if ($page=='') include 'home.php';
                if ($page=='login') include 'login.php';
                if ($page=='logout') include 'login.php';
                if ($page=='order') include 'order.php';
                if ($page=='entri_order') include 'entri_order.php';
                if ($page=='edit_order') include 'edit_order.php';
                if ($page=='supplier') include 'supplier.php';
                if ($page=='entri_supplier') include 'entri_supplier.php';
                if ($page=='edit_supplier') include 'edit_supplier.php';
                if ($page=='jenis') include 'jenis.php';
                if ($page=='entri_jenis') include 'entri_jenis.php';
                if ($page=='edit_jenis') include 'edit_jenis.php';
                // if ($page=='jurusan') include 'jurusan.php';
                if ($page=='profil') include 'profil.php';
                // if ($page=='user') include 'user.php';
                if ($page=='katalog') include 'katalog.php';
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer fixed-bottom font-small default-color">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://inventory.com/" target="_blank"> Inventory2020.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->




    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>