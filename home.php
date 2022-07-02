<!DOCTYPE html>
<html>

<head>
    <title>Damara Store!</title>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
            font-family: Arial;
        }

        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("icons/nb.jpg");
            background-size: cover;
            margin: 100px;
        }

        /* ul {
            list-style-type: none;
            float: center;
        }

        ul li {
            display: inline-block;
        }

        ul li a {
            text-decoration: none;
            color: white;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.3s;
        }

        ul li a:hover {
            background-color: white;
            color: black;
        } */

        .tombol {
            position: absolute;
            margin-top: 200px;
            top: 65%;
            left: 50%;
            color: white;
            transform: translate(-50%, -50%);
        }

        .tombol1 {
            border: 1px solid white;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            transition: 0.5s;
            border-radius: 5px;
            margin: 10px;
        }

        .tombol:hover {
            background: white;
            color: black;
        }
    </style>
</head>

<body>
    <div class="tombol">
        <a href="index.php?p=katalog" class="tombol1">Telusuri</a>
    </div>
</body>

</html>