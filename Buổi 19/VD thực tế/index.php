<?php

/**
 * Bài toán thực tế ví dụ :
 * Trong diễn đàn sẽ có 3 đối tượng người dùng
 * Người dùng cấp độ 1 : khách truy cập trang
 * Khách chỉ được xem bài viết và để lại phần bình luận
 * Người dùng cấp độ 2 : Mod
 * Mod có quyền duyệt bình luận, cấm người dùng thông thường
 * Người dùng cấp độ 3 : Quản trị viện administrator
 * Quản trị viên có quyền cao nhất có thể tạo ra bài viết
 * thêm , sửa thông tin của Mod và có tất cả quyền của Mod
 */

/**
 * tạo ra 3 class
 * class Guest {}
 * class Mod {}
 * class Admin {}
 */
//Nạp file con vào file hiện tại
include_once "guest.php";
include_once "mod.php";
include_once "admin.php";
//Guest
$guest1 = new Guest();
$guest1->name = "Hoan Nguyen";
$guest1->age = 22;
$guest1->join_created = "15/05/1998";

$guest1->postComment();
$guest1->viewArticle();

echo "<pre>";
print_r($guest1);
echo "</pre>";

//Mod
$mod1 = new Mod();
$mod1->name = "Trung Ruồi";
$mod1->viewArticle();

echo "<pre>";
print_r($mod1);
echo "</pre>";

//Admin
$admin1 = new Admin();
$admin1->viewArticle();

echo "<pre>";
print_r($admin1);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table, th, td{
            border: 1px solid black;
            padding: 10px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Join Created</th>
                <th>Approve Comment</th>
                <th>Manage Account</th>
                <th>Maintain</th>
            </tr>
        </thead>
        <tbody>
        <?php
        echo "<tr>";
        echo "<td>" .$guest1->name. " (Guest)"."</td>";
        echo "<td>" .$guest1->age. "</td>";
        echo "<td>" .$guest1->join_created. "</td>";
        echo "<td>" . "</td>";
        echo "<td>" . "</td>";
        echo "<td>" . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" .$mod1->name. " (Mod)"."</td>";
        echo "<td>" .$mod1->age. "</td>";
        echo "<td>" .$mod1->join_created. "</td>";
        echo "<td>" .$mod1->approve_comment. "</td>";
        echo "<td>" .$mod1->manage_acc. "</td>";
        echo "<td>" . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" .$admin1->name. " (Admin)"."</td>";
        echo "<td>" .$admin1->age. "</td>";
        echo "<td>" .$admin1->join_created. "</td>";
        echo "<td>" .$admin1->approve_comment. "</td>";
        echo "<td>" .$admin1->manage_acc. "</td>";
        echo "<td>" .$admin1->maintain. "</td>";
        echo "</tr>";
        ?>
        </tbody>
    </table>
</body>
</html>


