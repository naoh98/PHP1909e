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
        <?php
        $arr = [1,2,3,4,5];
        $arr2 = [6,7,8,9];
/*        array_push($arr,"hihi","haha");
        array_pop($arr);
        array_unshift($arr,"them moi", "them nua");
        array_shift($arr);
        array_splice($arr,2,3,["thay the",11]);*/
        $arr4 = array_slice($arr,2,1);
        $arr3 = array_merge($arr,$arr2);

        echo "<pre>";
        print_r($arr4);
        echo "</pre>";

/*        $dem = count($arr);
        $check = is_array($arr);
        echo "<div>".$check."</div>";*/



/*        $arr3 = [];
        $arr3["Ha noi"] = [
          "pop" => 1,
          "district"=> [
              "bd"=>"ba dinh",
              "hk"=>"hoan kiem"]
        ];
        $arr3["Sai gon"] = [
            "pop" => 2,
            "district"=> [
                "td"=>"thu duc",
                "q1"=>"quan 1"]
        ];
        foreach ($arr3 as $city_key => $city_value ){
            echo "<div>".$city_key."</div>";
            echo "<div>".$city_value["pop"]."</div>";
            foreach ($city_value["district"] as $district_key => $district_value){
                    echo "<div>".$district_key." => ".$district_value."</div>";
                }
            }

        */?>
    </div>
</body>
</html>