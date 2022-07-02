<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shorcut icon" href="icons/user.svg">
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
    * {
        margin: 0px;
        padding: 0px;
        font-family: Arial;
    }
    body {
        background-image: linear-gradient(rgba(0.6,0.6,0.6,0.6), rgba(0.6,0.6,0.6,0.6)), url("icons/nb.jpg");
        height: 60vh;
        background-size: cover;
        background-position: center;
        margin-top : 100px;
        margin-left : 250px;
        color: white;
        text-decoration: none;
        transition: 0.5s;
        border-radius: 5px;
        border: 1px solid white;
    }
    .form-control {
        border: 1px solid white;
    }
    .container {
        width : 22%;
    }
</style>

<body class="container">
    <div class="text-center">
        <div class="row">
            <div class="col-md" style="margin-top : 40px">
                <form action="" method="post" role="form" class="form-signin">
                    <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
                    <!-- <label for="inputUser"></label> -->
                    <input type="text" name="username" id="inputUser" class="form-control" placeholder="Username" required>

                    <!-- <label for="inputPass"></label> -->
                    <input type="password" name="password" id="inputPass" class="form-control" placeholder="Password" style="margin-top : 3px" required>

                    <label for=""></label>
                    <button type="submit" name="submit" class="btn btn-primary btn-sm btn-block">Sign In</button>
                </form>
                <div class="text-center">
                    <small>
                        <p>Not have account ? <a href="register.php"><u>Register</u></a></p>
                        <p>My info :</p>
                    </small>
                    
                    <p>
                        <a href="https://www.instagram.com/mfajrihusaini02" target="_blank" class="btn btn-info btn-sm"> <i class="fab fa-instagram"></i> </a>
                        <a href="https://www.facebook.com/fajri.husaini.52/" target="_blank" class="btn btn-info btn-sm"> <i class="fab fa-facebook"></i> </a>
                        <a href="https://api.whatsapp.com/send?phone=6282381944389" target="blank" class="btn btn-info btn-sm"> <i class="fab fa-whatsapp"></i> </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        if (isset($_POST['submit'])) {
            include 'koneksi.php';
            $password = md5($_POST['password']);
            $query = "SELECT * FROM user WHERE username='$_POST[username]' AND password='$password'";
            $cek = mysqli_query($database, $query);

            $data = mysqli_fetch_array($cek);
            $result = mysqli_num_rows($cek);

            if ($result == 1) {
                session_start();
                $_SESSION['user'] = $data['username'];
                $_SESSION['level'] = $data['level'];
                header('location:index.php');
            } else {
                echo "<script>alert('Username and Password Invalid')</script>";
            }
        }
    ?>

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