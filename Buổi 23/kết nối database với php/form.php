<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
include_once "connected.php";

if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $sql_insert = "INSERT INTO demo1(firstname,lastname,email) VALUES ('$firstname','$lastname','$email')";
    echo $sql_insert;
    $test=$connection->query($sql_insert);
    if($test){
        echo "Thành công";
    }
    else{
        echo "Thất baị";
    }
    echo "kết quả thực hiện câu query";
    var_dump($test);
}
?>

    <form name="myguest" method="post" action="">
        <div>
            <label for="">First name</label>
            <input type="text" name="firstname">
        </div>
        <div>
            <label for="">Last name</label>
            <input type="text" name="lastname">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>