<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        rsort sắp xếp ngược lại với sort
    </pre>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "<pre>";
    print_r($cars);
    echo "</pre>";
    rsort($cars);
    echo "<pre>";
    print_r($cars);
    echo "</pre>";
    ?>
</body>
</html>