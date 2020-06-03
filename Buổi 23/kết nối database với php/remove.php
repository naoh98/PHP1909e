<?php
// Nạp file kết nối CSDL
include_once "connected.php";
if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"])) {
    $id = (int)$_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $sql_delete = "DELETE FROM demo1 WHERE id=$id";
    echo $sql_delete;
    $test = $connection->query($sql_delete);
    if ($test) {
        echo "<br> Delete thành công";
    } else {
        echo "<br> Delete thất bại";
    }
    echo "<br> kết quả thực hiện câu query";
    var_dump($test);

    header("Location: select.php");
    exit;
}
?>