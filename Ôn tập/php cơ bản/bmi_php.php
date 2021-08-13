<?php
    $pl="";
    $benh="";
    $bmi = null;
    if (isset($_POST) && !empty($_POST)){
        if(isset($_POST["weight"]) && isset($_POST["height"]) && ($_POST["weight"]>0) && ($_POST["height"]>0)){
            $nang=$_POST["weight"];
            $cao=$_POST["height"];
            $bmi=$nang/($cao*$cao);
            if($bmi<18.5){
                $pl="gay";
                $benh="thap";
            }else if ($bmi>=18.5 && $bmi<24.9){
                $pl="binh thuong";
                $benh="trung binh";
            }else if ($bmi>=25 && $bmi<29.9){
                $pl="hoi beo";
                $benh="cao";
            }else if ($bmi>=30 && $bmi<34.9){
                $pl="beo phi cap 1";
                $benh="cao";
            }else if ($bmi>=35 && $bmi<39.9){
                $pl="beo phi cap 2";
                $benh="rat cao";
            }else if ($bmi>=40){
                $pl="beo phi cap 3";
                $benh="nguy hiem";
            }
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">

            <pre>
                Sử dụng công thức tại trang https://news.zing.vn/5-cong-thuc-don-gian-do-chi-so-bmi-post669580.html
                để tính toán ra chỉ số BMI khi nhập vào
                và in ra thông tin phân loại
                và nguy cơ bệnh tật
            </pre>
        <form name="bmi" action="" method="post">
            <div class="form-group">
                <label>Cân nặng ( Kg )</label>
                <input type="text" name="weight" value="" class="form-control" id="weight" placeholder="Cân nặng">

            </div>
            <div class="form-group">
                <label>Chiều cao ( đơn vị mét )</label>
                <input type="text" name="height" value="" class="form-control" id="height" placeholder="Chiều cao">
            </div>

            <button class="btn btn-primary" onclick="tinhbmi();">tính MBI</button>
        </form>
    </div>

    <div class="row">
        <h2>Kết quả sau tính toán</h2>


    </div>

    <div class="row">
        <p id="bmi">BMI : <?php echo $bmi ?> </p>
        <p id="pl">Phân loại : <?php echo $pl ?></p>
        <p id="benh">Nguy cơ bênh tật : <?php echo $benh ?></p>
    </div>
</div>


</body>
</html>