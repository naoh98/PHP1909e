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
        <form action="process.php" method="post">
            <div>
                <label>Name</label>
                <input type="text" name="name" value="">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="pass" value="">
            </div>
            <button>Ok</button>
        </form>
    </div>
    <?php
    if (isset($_GET["mess"]) && $_GET["mess"]){
        if($_GET["mess"]=="fail"){
            echo "<div style='color: red'>".$_GET["mess"]."</div>";
        }
    }
    ?>
</body>
</html>