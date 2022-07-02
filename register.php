<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="shorcut icon" href="icons/user.svg">
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
        background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("icons/nb.jpg");
        height: 45vh;
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
    .container {
        width : 22%;
    }
</style>
<body class="container ">
    <div class="text-center">
        <div class="row">
            <div class="col-md" style="margin-top : 40px">
            <h1 class="h3 md-2 font-weight-normal">Register</h1>
                <form action="" method="post" role="form" class="form-signin">
                    <p>    
                        <!-- <label for="inputUser"></label> -->
                        <input type="text" name="username" id="inputUser" class="form-control" placeholder="Username" required>
                    
                        <!-- <label for="inputPass"></label> -->
                        <input type="password" name="password" id="inputPass" class="form-control" placeholder="Password" required>

                        <!-- <label for="inputEmail"></label> -->
                        <!-- <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required> -->
                    </p>
                    <label for=""></label>
                    <button type="submit" name="submit" class="btn btn-primary btn-sm btn-block">Register</button>
                </form>
            </div>
        </div>
    </div>
    
    <?php
        if (isset($_POST['submit'])) {
            include 'koneksi.php';
            $query = "INSERT INTO user (username,password) VALUES ('$_POST[username]',MD5('$_POST[password]'))";
            $cek = mysqli_query($database, $query);

            if ($cek) 
            echo "<script>alert('Data Tersimpan')</script>";
			echo "<script>window.location='login.php'</script>";
        }
    ?>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>