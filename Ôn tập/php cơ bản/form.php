<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="get">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="pass" value="">
        </div>
        <div>
            <input type="submit" name="submit" value="Login">
        </div>
    </form>
    <?php
        if (isset($_POST["name"]) && isset($_POST["pass"]) && isset($_POST["submit"])){
            $name = $_POST["name"];
            $pass = $_POST["pass"];
            $log = $_POST["submit"];
            echo $name."</br>";
            echo $pass."</br>";
            echo $log."</br>";
        }
/*        if(isset($_GET["message"])){
            echo $_GET["message"];
            if ($_GET["message"]=="suc"){
                echo "Xin chao";
            }else{
                echo "Tam biet";
            }
        }*/
    ?>
</body>
</html>