<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="jquery.js"></script>
</head>
<body>
<?php
include_once "connectdb.php";
$sqlSelect = "SELECT * FROM posts ORDER BY id ASC LIMIT 0,20";
$stmt = $connection->prepare($sqlSelect);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$data = $stmt->fetchAll();
?>
<div class="container">
    <h2>Basic Ajax</h2>
    <a href="insert.php">Insert</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Intro</th>
            <th colspan="2">action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $item) { ?>
            <tr>
                <td><?php echo $item["id"]; ?></td>
                <td><?php echo $item["title"]; ?></td>
                <td><?php echo $item["intro"]; ?></td>
                <td><a href='<?php echo 'update.php?action=update&id='.$item["id"]; ?>'>update</a></td>
                <td><a href='<?php echo 'delete.php?action=delete&id='.$item["id"]; ?>'>delete</a></td>
            </tr>
         <?php } ?>
        </tbody>
    </table>
    <button class="loadmore">Xem Thêm</button>
</div>
</body>
<script>
    $(document).ready(function () {
        $(".loadmore").on("click",function () {
           var start = $(".table tbody>tr").length;

           var dataPost = {};
           dataPost.start = start;
           dataPost.limit = 20;
           $.ajax({
            url: "loadmore.php",
            data: dataPost,
            type: 'POST',
            dataType: 'json',
            beforeSend: function() {
                alert("chuẩn bị load tiếp 20 dòng");
            },
            success: function(res){
                console.log(res);

                if (parseInt(res.length)>0){
                    var html = "";
                    for (var i =0; i<res.length;i++){
                        html +=
                            '<tr>'
                            +'<td>'+res[i].id+'</td>'
                            +'<td>'+res[i].title+'</td>'
                            +'<td>'+res[i].intro+'</td>'
                            '</tr>';
                    }
                    console.log(html);
                    $(".table tbody").append(html);
                }else{
                    alert("Hết dữ liệu trong database");
                    $(".loadmore").hide();
                }
            },
            error: function() {
                alert("Có lỗi xảy ra");
            },
            complete: function() {
                alert("hoàn thành");
            }
            });

        });
    });
</script>
</html>