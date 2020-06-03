<?php
$cookieName = "username";
$cookieValue = "admin";
$lifetime = time() + (86400*30);

setcookie($cookieName, $cookieValue, $lifetime,"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        hàm setcookie phải đặt trước thẻ mở html
    </pre>

    <?php
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";

        echo "<br>username: " .$_COOKIE["username"];
    ?>
</body>
</html>