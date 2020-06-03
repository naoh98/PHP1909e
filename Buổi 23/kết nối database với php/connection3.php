<?php
$mysqlServer ="localhost";
$mysqlUser = "root";
$mysqlpassword ="";
$mysqldatabase="demo";

try{
    $connection = new PDO("mysql:host=$mysqlServer;dbname=$mysqldatabase",$mysqlUser,$mysqlpassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connect thành công";
}
catch(PDOException $e)
{
    echo "connect thất bại" .$e->getMessage();
}
echo "Demo Test";