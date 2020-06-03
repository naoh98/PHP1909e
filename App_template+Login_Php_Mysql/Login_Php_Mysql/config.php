<?php

/** KHAI BÁO HẰNG SỐ KẾT NỐI CSDL */

define("server","localhost");
define("username","root");
define("password","");
define("db","login_demo");

$connection = mysqli_connect(server,username,password,db);

if (!$connection){
    die("Kết nối thất bại" .mysqli_connect_error());
}