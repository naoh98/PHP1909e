<?php
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .container{
            min-height: 200px;
        }
        .row{
            height: 100px;
        }
        p{
            color: red;
            font-size: 40px;
        }
        .col-md-8{
            background: greenyellow;
        }
        .col-md-12{
            background: lightskyblue;
        }
        .col-md-2{
            background: lightgray;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if(isset($_SESSION["login"]) && ($_SESSION["login"] == true)){ ?>
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <a href="logout.php">Logout</a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <p>Welcome <?php echo $_SESSION["name"]; ?></p>
                    <p><?php echo $_SESSION["pass"]; ?></p>
                </div>
            </div>
        <?php
        }else{
            ?>
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2">
                    <a href="register.php">Register</a>
                </div>
                <div class="col-md-2">
                    <a href="login.php">Login</a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <p>You are not Login</p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>