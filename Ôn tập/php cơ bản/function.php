<?php
    function tong($a, $b){
        $tong = $a+$b;
        return "<div style='background: red;'>Tong la: ".$tong."</div>";
    }
?>

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
    <div class="container">
        <?php
            echo tong(4,5);
        ?>
    </div>
</body>
</html>