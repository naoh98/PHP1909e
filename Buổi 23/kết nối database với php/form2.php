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

<?php
// Nạp file kết nối CSDL
include_once "connected.php";
if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"])) {
    $id = (int)$_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $sql_update = "UPDATE demo1 SET firstname='$firstname',lastname='$lastname',email='$email' WHERE id='$id'";
    echo $sql_update;
    $test = $connection->query($sql_update);
    if ($test) {
        echo "<br> Update thành công";
    } else {
        echo "<br> Update thất bại";
    }
    echo "<br> kết quả thực hiện câu query";
    var_dump($test);
}
?>

<div class="page-wrap">
    <form name="myguest" action="" method="post">

        <p>
            <label>id</label>
            <input name="id" type="text" value="">
        </p>
        <p>
            <label>firstname</label>
            <input name="firstname" type="text" value="">
        </p>

        <p>
            <label>lastname</label>
            <input name="lastname" type="text" value="">
        </p>

        <p>
            <label>email</label>
            <input name="email" type="email" value="">
        </p>

        <p>
            <input type="submit" name="submit" value="Insert data">
        </p>

    </form>
</div>

</body>
</html>