<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Hoan Nguyen";
    $name2 = "Trung Ruoi";
    echo "<br>". $name;
    ?>
    <h1>Cú pháp Laravel</h1>
    <div>{{$name2}}</div>

    <?php
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    ?>
</body>
</html>