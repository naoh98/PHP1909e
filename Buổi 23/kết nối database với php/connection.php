<?php
$mysqlServer ="localhost";
$mysqlUser = "root";
$mysqlpassword ="";
$mysqldatabase="demo";

$connection = new mysqli($mysqlServer,$mysqlUser,$mysqlpassword,$mysqldatabase);

if($connection->connect_error){
    die("Kết nối bị lỗi" .$connection->connect_error);
}
echo "Kết nối thành công";