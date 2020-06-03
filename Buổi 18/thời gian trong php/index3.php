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
    $time2000 = mktime(12,0,0,1,1,2000);
    echo $time2000;
    echo "<br>" . date("H:i:s d/m/Y", $time2000);
    ?>
</body>
</html>