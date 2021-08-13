<?php
$mysqlServer ="localhost";
$mysqlUser = "root";
$mysqlpassword ="";
$mysqldatabase="fahasa";

try{
    $connection = new PDO("mysql:host=$mysqlServer;dbname=$mysqldatabase",$mysqlUser,$mysqlpassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "connect thất bại" .$e->getMessage();
}