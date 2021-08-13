<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "ontap";
try{
    $connect = new PDO("mysql:host=$server;dbname=$db",$user,$pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "ket noi that bai".$e->getMessage();
}