<?php
session_start();
include_once ("connectdb.php");
$fail="";
if(isset($_POST) && !empty($_POST)){
    if (isset($_POST["name"]) && isset($_POST["pass"])){
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        $sql = "SELECT name, password FROM info WHERE name = '$name' AND password = '$pass'";
        $stmt=$connect->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        if(count($result)>0){
            $_SESSION["login"]=true;
            $_SESSION["name"]=$name;
            $_SESSION["pass"]=$pass;
            header("Location: home.php");
        }else{
            $fail = "sai tk hoac mk";
        }
    }
}
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

</head>
<body>
<div class="container text-center">
    <h3>Log In</h3>
    <form action="login.php" method="post">
        <div class="row">
            <label class="col-md-2">Name</label>
            <input type="text" class="col-md-4" name="name" value="">
        </div>
        <div class="row">
            <label class="col-md-2">Password</label>
            <input type="password" class="col-md-4" name="pass" value="">
        </div>
        <div class="row">
            <input class="col-md-1" type="submit" value="OK">
        </div>
        <p style="color: red;"><?php echo $fail; ?></p>
    </form>
</div>
</body>
</html>