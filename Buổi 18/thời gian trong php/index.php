<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
                Thời gian trong PHP
        Có 2 kiểu thời gian trong PHP
        1 - Thời gian con người có thể đọc được
        2 - Thời gian tính toán được ( timestamp )
    </pre>

    <?php
        //in ra loại time mà người đọc đc
        echo "<br> hàm date: " .date("h:m:s d/m/Y"). " (dùng để đọc thời gian)";
        //in ra loại time tính toán được
        echo "<br> timestamp hàm time: " .time(). " (dùng để tính toán)";
    ?>
</body>
</html>