<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
if (isset($_FILES["upload"])){
    $path = dirname(__FILE__);
    $tmp = [];
    $name=[];
    $error=[];
    foreach ($_FILES["upload"]["error"] as $file){
        $error[]=$file;
    }
    foreach ($_FILES["upload"]["tmp_name"] as $file){
        $tmp[]=$file;
    }
    foreach ($_FILES["upload"]["name"] as $file){
        $name[]=$file;
    }
    for ($i=0;$i<count($name);$i++){
        if ($error[$i]>0){
            echo $error[$i];
        }else{
            move_uploaded_file($tmp[$i],$path."/".$name[$i]);
        }
    }
}

?>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="upload[]" multiple>
        <input type="submit" value="ok">
    </form>
</body>
</html>