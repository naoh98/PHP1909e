<?php
session_start();

require_once ("database.php");

$database = new Database();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giỏ Hàng Của Tui ^^!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="template/css/index.css">
    <script src="template/js/jquery.js"></script>
</head>
<body>
<div class="container">
    <div class="row web-bar">
        <h1>Danh Mục Sản Phẩm</h1>
        <div class="cart-info">
            <?php if(isset($_SESSION["cart-item"]) && !empty($_SESSION["cart-item"])){ ?>
            <div class="trangtri">
                <a href="#">
                   <img src="template/img/cart-icon.png" alt="">
                   <?php
                   $itemnum = 0;
                   foreach ($_SESSION["cart-item"] as $key_cart=>$value_cart) {
                       $itemnum+=1;
                   }
                   ?>
                   Có <b><?php echo  $itemnum; ?></b> sản phẩm trong giỏ
                </a>
            </div>
            <div class="table">
                <h5>Chi Tiết Giỏ Hàng</h5>
                <table class="hoadon">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $tongtien = 0;
                    foreach ($_SESSION["cart-item"] as $key_cart=>$value_cart) {
                        $thanhtien = $value_cart["price"]*$value_cart["soluong"];
                        $rprice = $value_cart["price"];
                    ?>
                        <tr>
                            <td><?php echo $value_cart["id"]; ?></td>
                            <td><?php echo $value_cart["product_name"]; ?></td>
                            <td><?php echo number_format($rprice,0,",","."); ?></td>
                            <td><?php echo $value_cart["soluong"]; ?></td>
                            <td><strong>
                                    <?php echo number_format($thanhtien,0,",","."). " VNĐ"; ?></strong>
                            </td>
                            <td>
                                <form action="process.php" name="remove_id=<?php echo $value_cart["id"]; ?>" method="post">
                                    <input type="hidden" name="product_id" value="<?php echo $value_cart["id"]; ?>">
                                    <input type="hidden" name="action" value="remove">
                                    <input type="submit" name="submit" value="Xóa" class="btn-warning">
                                </form>
                            </td>
                        </tr>
                    <?php
                    $tongtien+= $thanhtien;
                    }
                    ?>
                    </tbody>
                </table>
                <div class="tongtien">Tổng Tiền: <strong>
                        <?php echo number_format($tongtien,0,",","."). " VNĐ"; ?></strong>
                </div>
            </div>
            <?php }else{ ?>
                <div class="trangtri">
                    <a href="#">
                        <img src="template/img/cart-icon.png" alt="">
                        Có <b>0</b> sản phẩm trong giỏ
                    </a>
                </div>
                <div class="table">
                    <h5>Chi Tiết Giỏ Hàng</h5>
                    <table class="hoadon">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th></th>
                        </tr>
                        </thead>
                    </table>
                    <?php echo "<p style='color: lawngreen; font-size: 20px; font-weight: bold; margin-top: 20px;'>
                                <i>Giỏ Hàng Của Bạn Chưa Có Gì Hết !</i></p>"; ?>
                    <div class="tongtien">Tổng Tiền: <strong>0 VNĐ</strong></div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="row product">
        <?php
        $sql="SELECT * FROM products";
        $products = $database->runQuery($sql);

        if(!empty($products)){
            foreach ($products as $product){ ?>
                <div class="col-md-4">
                    <form action="process.php" method="post" name="product<?php echo $product["id"]; ?>" class="form-group">
                        <h3 class="id"><?php echo $product["id"]; ?></h3>
                        <img src="template/img/<?php echo $product["product_image"]; ?>" alt="">
                        <h5><?php echo $product["product_name"]; ?></h5>
                        <h6><?php echo "Giá: " .number_format($product["price"],0,",","."). " VNĐ"; ?></h6>
                        <p><?php echo "Thông số: " .$product["product_desc"]; ?></p>
                        <div class="add-item">
                            <input id="hell" type="number" name="soluong" placeholder="Nhập số lượng">

                            <input type="hidden" name="action" value="add">
                            <input type="hidden" name="product_id" value="<?php echo $product["id"]; ?>">

                            <input type="submit" class="btn-success btn-add" name="submit" value="Thêm vào giỏ">
                        </div>
                    </form>
                </div>
            <?php }
        }
        ?>
    </div>

    <div class="row page" id="note">
        <div class="col-md-3"><a href="#note" class="btn change-page"><<</a></div>
        <div class="col-md-2"><a href="#note" class="btn change-page">1</a></div>
        <div class="col-md-2"><a href="#note" class="btn change-page">2</a></div>
        <div class="col-md-2"><a href="#note" class="btn change-page">3</a></div>
        <div class="col-md-3"><a href="#note" class="btn change-page">>></a></div>
    </div>
</div>
</body>
<script src="template/js/main.js"></script>
</html>