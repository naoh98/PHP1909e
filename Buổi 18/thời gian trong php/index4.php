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
    //định dạng 1
    //$time1 = "1-12-2019 19:26:54";
    //định dạng 2
    $time1 = "19:26:54 1-12-2019";
    echo "thời gian: 1-12-2019 19:26:54";
    $time2 = strtotime($time1);
    echo "<br> demo chuyển từ đọc được sang timestamp: " .$time2;
    echo "<br> kiểm tra ngược lại xem chuyển đổi đúng ko " .date("H:i:s d/m/Y", $time2);

    ?>
</body>
</html>