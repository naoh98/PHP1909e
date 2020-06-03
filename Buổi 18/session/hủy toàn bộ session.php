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
    //phải đặt session_unset trước session_destroy (quy tắc)
    //remove all session variables
    session_unset();
    //destroy the session
    session_destroy();
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
</body>
</html>