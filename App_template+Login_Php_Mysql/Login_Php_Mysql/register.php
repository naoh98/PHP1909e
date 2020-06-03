<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php
include_once "config.php";

if (isset($_POST) && !empty($_POST)){
    $error = [];
    if (!isset($_POST["name"]) || empty($_POST["name"])){
        $error[] = "Username không hợp lệ";
    }
    if (!isset($_POST["username"]) || empty($_POST["username"])){
        $error[] = "Username không hợp lệ";
    }
    if (!isset($_POST["password"]) || empty($_POST["password"])){
        $error[] = "Password không hợp lệ";
    }
    if (!isset($_POST["cfpassword"]) || empty($_POST["cfpassword"])){
        $error[] = "Confirm password không hợp lệ";
    }
    if ($_POST["cfpassword"] !== $_POST["password"]){
        $error[] = "Confirm password không khớp password";
    }
    // NẾU KO CÓ LỖI THÌ INSERT VÀO CSDL
    if (empty($error)){
        $name= $_POST["name"];
        $username= $_POST["username"];
        $password= md5($_POST["password"]);
        $sql = "INSERT INTO user(name,username,password) VALUES (?,?,?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sss",$name,$username,$password);
        $stmt->execute();
        $stmt->close();
        $_SESSION["login"] = true;
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $_SESSION["reg_date"] = date("Y-m-d H:i:s");
        header("Location: home.php");
        exit;
    }else{
        $error_string = implode("<br>",$error);
        echo "<div class='alert alert-danger'>";
        echo $error_string;
        echo "</div>";
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form name="register" action="" method="post">
                <h3 style="text-align: center">Đăng Ký</h3>
                <hr>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="cfpassword" class="form-control" placeholder="Enter your password again">
                </div>
                <button type="submit" class="btn btn-primary">Đăng Ký</button>

                <div class="form-group">
                    <p>Đã có tài khoản ? <u><a href="login.php">Đăng nhập</a></u></p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>