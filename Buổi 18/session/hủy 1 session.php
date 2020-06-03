<?php
session_start();
?>
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
    $_SESSION["username"] = "admin";
    $_SESSION["email"] = "admin@gmail.com";
    $_SESSION["user_role"] = "administrator";

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    //hủy 1 session
    unset($_SESSION["user_role"]);
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
</body>
</html>