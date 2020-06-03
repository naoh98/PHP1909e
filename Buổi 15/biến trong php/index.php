<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        trong php muốn nối chuỗi ta dùng dấu '.' ko như javascript dùng dấu '+'
    </pre>
    <?php
    $a = 6;
    $b = 2;
    echo "a = " .$a;
    echo "<br>";
    echo "b = " .$b;
    echo "<br>";
    echo "Tổng a + b là: " .($a+$b);
    echo "<br>";
    echo "Hiệu a - b là: " .($a-$b);
    echo "<br>";
    echo "Thương a * b là: " .($a*$b);
    echo "<br>";
    echo "Tích a / b là: " .($a/$b);
    ?>
</body>
</html>