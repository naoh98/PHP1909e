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
if (isset($_GET['id']) && isset($_GET['action'])){
    if ($_GET['action']=='update'){
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM posts WHERE id=".$id;
        $stmt = $connection->prepare($sqlSelect);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $data = $stmt->fetchAll();

        if (isset($_POST['title']) && isset($_POST['intro'])){
            $title1 = $_POST['title'];
            $intro1 = $_POST['intro'];
            $sqlSelect1 = "UPDATE posts SET title='".$title1."', intro='".$intro1."' WHERE id=".$id;
            $stmt1 = $connection->prepare($sqlSelect1);
            $stmt1->execute();
            header('Location: index.php');
        }
    }
}
?>
<form method="post">
    <table>
        <?php
        foreach ($data as $item){  ?>
            <tr>
                <td>
                    <label for="">title</label>
                </td>
                <td>
                    <input type="text" name="title" value="<?php echo $item['title'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">intro</label>
                </td>
                <td>
                    <input type="text" name="intro" value="<?php echo $item['intro'] ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Update" style="font-size: 20px;">
                </td>
            </tr>
    <?php  }
        ?>
    </table>
</form>
</body>
</html>