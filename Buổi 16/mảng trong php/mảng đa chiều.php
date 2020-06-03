<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
    $vietnam = [];
    $vietnam["hn"] = [
        "province" => "ha noi",
        "district" => [
            "bd" => "ba dinh",
            "hk" => "hoan kiem",
            "tx" => "thanh xuan"
        ]
    ];

    $vietnam["dn"] = [
        "province" => "da nang",
        "district" => [
            "bd" => "ba dinh",
            "hk" => "hoan kiem",
            "tx" => "thanh xuan"
        ]
    ];

    $vietnam["sg"] = [
        "province" => "sai gon",
        "district" => [
            "bd" => "ba dinh",
            "hk" => "hoan kiem",
            "tx" => "thanh xuan"
        ]
    ];

    foreach ($vietnam as $key_province => $value_province){
        echo "<br>" .$key_province;
        echo "<br>" .$value_province["province"];
        foreach ($value_province["district"] as $key_district => $value_district){
            echo "<br>Key: " .$key_district;
            echo "<br>Value: " .$value_district;
        }
    }
    ?>
</body>
</html>