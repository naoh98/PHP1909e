<?php
//Nạp file con vào file hiện tại
include_once "guest.php";
include_once "mod.php";
include_once "admin.php";

$guest1 = new Guest();
$guest1->getBank_account();
echo "<pre>";
print_r($guest1);
echo "</pre>";

$mod1 = new Mod();
$mod1->getStatusInfo();

/**
 * 3 nơi để truy cập
 * bên ngoài của class
 * bên trong chính class đó
 * bên trong class kế thừa từ 1 class cha
 *
 * giới hạn public cho thuộc tính và phương thức thì có thể truy ở cả 3 nơi trên
 * private chỉ có thể truy cập trong chính class đó
 * protected giống private nhưng có thể truy cập từ các class con
 */