<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    form{
        width: 280px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: whitesmoke;
        text-align: center;
        font-size: 20px;
        border: 1px solid grey;
        border-radius: 5px;
    }
    table{
        width: 100%;
    }
</style>
<body>
<?php
include_once "connectdb.php";
if (isset($_POST['title']) && isset($_POST['intro'])){
    $title = $_POST['title'];
    $intro = $_POST['intro'];
    $sqlSelect = "INSERT INTO posts(title,intro) VALUES('$title','$intro')";
    $stmt = $connection->prepare($sqlSelect);
    $stmt->execute();
    header('Location: index.php');
}
?>
    <form method="post">
        <table>
            <tr>
                <td>
                    <label for="">title</label>
                </td>
                <td>
                    <input type="text" name="title">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">intro</label>
                </td>
                <td>
                    <input type="text" name="intro">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit" style="font-size: 20px;">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>