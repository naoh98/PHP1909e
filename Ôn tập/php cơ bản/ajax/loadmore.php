<?php
include_once "connectdb.php";
if (isset($_POST) && !empty($_POST)){
    if (isset($_POST["start"]) && isset($_POST["limit"])){
        $start = $_POST["start"];
        $limit = $_POST["limit"];
        $sql = "SELECT * FROM info ORDER BY id ASC LIMIT $start,$limit";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        echo json_encode($result);
    }else{
        echo "du lieu ko hop le";
    }
}
die;