<?php
session_start();

if (isset($_SESSION["login"]) && ($_SESSION["login"] == true)){
    header("Location: home.php");
    exit;
}

include_once "config.php";

$error = [];
if (isset($_POST) && !empty($_POST)){
    if (!isset($_POST["username"]) || empty($_POST["username"])){
        $error[] = "Chưa nhập username";
    }
    if (!isset($_POST["password"]) || empty($_POST["password"])){
        $error[] = "Chưa nhập password";
    }
    if (is_array($error) && empty($error)){
        $username = $_POST["username"];
        $password = md5($_POST["password"]);

        $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if (isset($row["id"]) && $row["id"]>0){
            $_SESSION["login"] = true;
            $_SESSION["name"] = $row["name"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["password"] = $row["password"];
            $_SESSION["reg_date"] = $row["reg_date"];
            header("Location: home.php");
            exit;
        }else{
                $error[] = "Mật khẩu hoặc password không đúng";
        }
    }
    if (is_array($error) && !empty($error)){
        $error_string = implode("<br>",$error);
        echo "<div class='alert alert-danger'>";
        echo $error_string;
        echo "</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form name="login" action="" method="post">
                    <h3 style="text-align: center">Đăng Nhập</h3>
                    <hr>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng Nhập</button>

                    <div class="form-group">
                        <p>Chưa có tài khoản ? <u><a href="register.php">Đăng ký</a></u></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>