<?php
include_once "connectdb.php";

/** FUNCTION RANDOM STRING */
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$sql = "";
$connection->beginTransaction();

for ($i = 1; $i<200; $i++){
    $title = $i ."-title-". generateRandomString(10);
    $intro = $i ."-intro-". generateRandomString(10);
    $singleSQL = "INSERT INTO posts(title,intro) VALUES ('$title','$intro')";
    $sql .= $singleSQL;
    $connection->exec($singleSQL);
}
echo "<br>".$sql;
$connection->commit();