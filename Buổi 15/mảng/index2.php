<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>

    </pre>

    <?php
    //khai báo mảng và gắn key tự động
    $a = [];
    $a[] = ["Hoàn Nguyễn"];
    $a[] = ["Ruồi xấu hơn tui"];
    $a[] = ["Brua hihi"];

    //khai báo mảng và gán key khi khai báo phần tử
    $b = [];
    $b[0] = [1];
    $b[1] = [2];
    $b[3] = [3];

    //khai báo mảng và gán key cùng 1 dòng
    $c = ["a" => "true","b" =>"false"];
    echo "<pre>";
    print_r($c);
    echo "</pre>";
    ?>
</body>
</html>