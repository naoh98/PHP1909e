<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            text-align: center;
        }
        .container{
            width: 900px;
            margin: 0px auto;
        }
        .clearfix::after{
            content: "";
            clear: both;
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php include_once "header.php"?>
        <main class="clearfix">
            <?php include_once "sidebar.php"?>
            <?php include_once "maincontent.php"?>
        </main>
        <?php include_once "footer.php"?>
    </div>
</body>
</html>