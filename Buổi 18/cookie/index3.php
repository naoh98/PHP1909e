<?php
$cookieName = "password";
$cookieValue = "12345";
$lifetime = time() + (86400*30);

setcookie($cookieName, $cookieValue, $lifetime,"/");
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

setcookie($cookieName, 12345678, $lifetime,"/");
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        thay đổi nội dung của 1 cookie
    </pre>
</body>
</html>