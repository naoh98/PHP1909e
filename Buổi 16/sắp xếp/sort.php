<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    sort là sắp xếp theo bảng chữ cái a, b, c, .... hay các số theo thứ tự tăng dần
</pre>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "<pre>";
    print_r($cars);
    echo "</pre>";
    sort($cars);
    echo "<pre>";
    print_r($cars);
    echo "</pre>";
    ?>
</body>
</html>