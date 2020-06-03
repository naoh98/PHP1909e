<?php
include_once "connectdb.php";

if (isset($_POST["start"]) && isset($_POST["limit"])){
    $start = $_POST["start"];
    $limit = $_POST["limit"];

    $sql = "SELECT * FROM posts ORDER BY id ASC LIMIT $start,$limit";

    $stmt = $connection->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();

    echo json_encode($data);
}else{
    echo "Dữ liệu ko hợp lệ";
}
exit;