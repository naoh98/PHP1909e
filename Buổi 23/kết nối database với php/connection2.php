<?php
$mysqlServer ="localhost";
$mysqlUser = "root";
$mysqlpassword ="";
$mysqldatabase="demo";

$connection = mysqli_connect($mysqlServer,$mysqlUser,$mysqlpassword,$mysqldatabase);

if(!$connection){
    die("Kết nối bị lỗi" .mysqli_connect_error());
}
echo "Kết nối thành công";