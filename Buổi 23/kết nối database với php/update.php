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

    header("Location: select.php");
    exit;
}
?>