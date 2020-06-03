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
    $myfile = fopen("newfile.txt", "w");
    $content = "
        dòng 1
        dòng 2
        dòng 3
    ";
    fwrite($myfile,$content);
    fclose($myfile)
    ?>
</body>
</html>