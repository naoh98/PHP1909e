<?php
$mysqlServer ="localhost";
$mysqlUser = "root";
$mysqlPassword ="";
$mysqlDatabase="book_store";

try{
    $connection = new PDO("mysql:host=$mysqlServer;dbname=$mysqlDatabase",$mysqlUser,$mysqlPassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Kết Nối Thất Bại" .$e->getMessage();
}