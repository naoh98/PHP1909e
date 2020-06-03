<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        hủy 1 phần tử trong mảng
    </pre>

    <?php
        $students = [];
        $students[] = "Hoan Nguyen";
        $students[] = "Trung Ruồi";
        $students[] = "Hiếu Béo";
    echo "<pre>";
    print_r($students);
    echo "</pre>";
        //hủy 1 phần tủ
        unset($students[1]);
    echo "<pre>";
    print_r($students);
    echo "</pre>";

    ?>
</body>
</html>