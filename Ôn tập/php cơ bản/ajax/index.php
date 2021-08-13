<?php
include_once "connectdb.php";
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
    <script src="jquery.js"></script>
</head>
<body>
    <table class="table text-center">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>pass</td>
            </tr>
        </thead>
        <tbody class="content">
        <?php
        $sql = "SELECT * FROM info ORDER BY id ASC LIMIT 0,2";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        if (count($result)>0){
            foreach ($result as $value){ ?>
                <tr>
                    <td><?php echo $value["id"] ?></td>
                    <td><?php echo $value["name"] ?></td>
                    <td><?php echo $value["password"] ?></td>
                </tr>
        <?php
            }
        }
        ?>
        </tbody>
    </table>
    <button class="loadmore">Loadmore</button>
    <script>
        $(document).ready(function () {
            $(".loadmore").on("click", function () {
               var start = $(".content>tr").length;
               var obj ={};
               obj.start = start;
               obj.limit = 2;
               $.ajax({
                url: "loadmore.php",
                data: obj,
                type: 'POST',
                dataType: 'json',
                beforeSend: function() {

                },
                success: function(res){
                    console.log(res);
                    if (parseInt(res.length)>0){
                        var html ="";
                        for(let i =0;i<res.length;i++){
                            html+="<tr>" +
                                "<td>"+res[i].id+"</td>"+
                                "<td>"+res[i].name+"</td>"+
                                "<td>"+res[i].password+"</td>"+
                                "</tr>";
                        }
                        $(".content").append(html);
                    }else{
                        alert("het du lieu");
                        return;
                    }
                },
                error: function(error) {
                    console.log("loi roi");
                },
                complete: function() {

                }
                });

            });
        });
    </script>
</body>
</html>