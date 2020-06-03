<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        $_REQUEST = $_POST + $_GET
    </pre>
    <?php
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    ?>
    <form action="" method="post" name="form">
        <div>
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>