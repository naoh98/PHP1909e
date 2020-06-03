<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        mảng trong php được khai báo bởi:
        $a = array();
        hoặc
        $a = [];

        Chú ý : không thể in ra mảng bằng echo

        trong mảng chứa nhiều phần tử
        mỗi phần tử thì có 2 khái niệm tạo ra 1 phần tử
        - key ( hay còn gọi là là chỉ số của phần tử )
        - value ( giá trị của phần tử )
    </pre>

    <?php
    $a = array(1,2,3,4,5,6);
    $b = array(1.4,4.6,4.8,9.2,5.8);
    $c = array("Hoàn Nguyễn","Trung Ruồi", "Hiếu Béo");
    $d = array("Hoàn Nguyễn",22,true);
    //hoặc
    $e = ["Mạnh Brùa","Đạt Óc"];
    $f = [1,5,7,4,8];
    $g = [true, false];

    //duyệt mảng
    echo "<pre>";
    print_r($a);
    echo "</pre>";

    //in ra từng phần tử của mảng
    foreach ($e as $key => $value){
        echo "<br>".$key." - ".$value;
    }
    ?>
</body>
</html>