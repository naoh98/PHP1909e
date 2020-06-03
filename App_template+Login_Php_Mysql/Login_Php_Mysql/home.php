<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
<?php
if (!isset($_SESSION["login"]) || ($_SESSION["login"] != true)){
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 fail">
                <h1>Bạn chưa đăng nhập.</h1>
                <button class="btn btn-primary dht">Bấm vào đây để đăng nhập</button>
            </div>
        </div>
    </div>
<?php
}else{
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 success">
                <h1>Welcome <?php echo $_SESSION["name"];?></h1>
                <p><b>Thông tin tài khoản:</b>
                <?php
                echo "<br>Username: ".$_SESSION["username"];
                echo "<br>Ngày Tạo: ".$_SESSION["reg_date"];
                ?>
                </p>
                <a href="logout.php">Đăng Xuất</a>
            </div>
        </div>
    </div>
<?php
}
?>
</body>
<script src="js/jquery.js"></script>
<script src="js/home.js"></script>
</html>