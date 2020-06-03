<?php
if(isset($_GET["id"]) && ($_GET["id"]>0)) {
    $id = (int)$_GET["id"];

    include_once "connected.php";
    $sqlSelect = "SELECT * FROM demo1 WHERE id=$id";
    $stmt = $connection->prepare($sqlSelect);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $all = $stmt->fetchAll();

    echo "<pre>";
    print_r($all);
    echo "</pre>";
    $user = isset($all[0]) ? $all[0] :0;
}
else{
    echo "Khong tim thay id";
}
if (!isset($user["id"])){
    echo "<br> ko tim thay id tuong ung ";
    exit;
}
?>

<div class="page-wrap">
    <form name="myguest" action="remove.php" method="post">

        <p>
            <label>id</label>
            <input name="id" type="text" value="<?php echo $user["id"];?>">
        </p>
        <p>
            <label>firstname</label>
            <input name="firstname" type="text" value="<?php echo $user["firstname"] ?>">
        </p>

        <p>
            <label>lastname</label>
            <input name="lastname" type="text" value="<?php echo $user["lastname"] ?>">
        </p>

        <p>
            <label>email</label>
            <input name="email" type="email" value="<?php echo $user["email"] ?>">
        </p>

        <p>
            <input type="submit" name="submit" value="Delete Data">
        </p>

    </form>
</div>
