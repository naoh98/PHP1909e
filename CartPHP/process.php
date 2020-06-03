<?php
session_start();

require_once ("database.php");

$database = new Database();

/** CHECK $_POST CÓ CÓ DỮ LIỆU ĐƯỢC GỬI ĐI HAY KO VÀ DỮ LIỆU GỬI ĐI KO RỖNG */
if(isset($_POST) && !empty($_POST)){
    if (isset($_POST["action"])){
        switch ($_POST["action"]){
            case "add":
                if (isset($_POST["soluong"]) && isset($_POST["product_id"])){
                    if ($_POST["soluong"]>0 && $_POST["soluong"]!=""){
                    $sql="SELECT * FROM products WHERE id=" .(int)$_POST['product_id'];
                    $product = $database->runQuery($sql);
                    $product = current($product);

                    echo '<br> $product';
                    echo "<pre>";
                    print_r($product);
                    echo "</pre>";

                    $product_id = $product["id"];
                    /** CHECK XEM ĐÃ CÓ SESSION CHƯA VÀ SESSION CÓ DỮ LIỆU HAY KHÔNG */
                    if (isset($_SESSION["cart-item"]) && !empty($_SESSION["cart-item"])){

                        if (isset($_SESSION["cart-item"][$product_id])){
                            /** TRƯỜNG HỢP SẢN PHẨM ĐÃ CÓ TRONG GIỎ HÀNG THÌ CẬP NHẬT SỐ LƯỢNG */
                            $exist_cart_item = $_SESSION["cart-item"][$product_id];
                            $exist_soluong = $exist_cart_item["soluong"];
                            $cart_item = [];
                            $cart_item["id"] = $product["id"];
                            $cart_item["product_name"] = $product["product_name"];
                            $cart_item["product_image"] = $product["product_image"];
                            $cart_item["price"] = $product["price"];
                            $cart_item["soluong"] = $exist_soluong + $_POST["soluong"];
                            $_SESSION["cart-item"][$product_id] = $cart_item;
                        }else{
                            /** TRƯỜNG HỢP SẢN PHẨM CHƯA CÓ TRONG GIỎ HÀNG THÌ ADD VÀO */
                            $cart_item = [];
                            $cart_item["id"] = $product["id"];
                            $cart_item["product_name"] = $product["product_name"];
                            $cart_item["product_image"] = $product["product_image"];
                            $cart_item["price"] = $product["price"];
                            $cart_item["soluong"] = $_POST["soluong"];
                            $_SESSION["cart-item"][$product_id] = $cart_item;
                        }

                        foreach ($_SESSION["cart-item"] as $key_id=>$value_id){
                            echo '<br> BẮT ĐẦU DUYỆT MẢNG';
                            echo "<pre>";
                            echo "KEY:";
                            print_r($key_id);
                            echo "</pre>";
                            echo "<pre>";
                            print_r($value_id);
                            echo "</pre>";
                        }
                        echo '<br> KẾT THÚC DUYỆT MẢNG';
                    /** NẾU SESSION CHƯA TỒN TẠI VÀ KHÔNG CÓ DỮ LIỆU THÌ KHỞI TẠO */
                    }else{
                        $_SESSION["cart-item"] = [];
                        $cart_item = [];
                        $cart_item["id"] = $product["id"];
                        $cart_item["product_name"] = $product["product_name"];
                        $cart_item["product_image"] = $product["product_image"];
                        $cart_item["price"] = $product["price"];
                        $cart_item["soluong"] = $_POST["soluong"];
                        $_SESSION["cart-item"][$product_id] = $cart_item;
                    }
                }
                }
                break;

            case "remove":
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";

                if (isset($_POST["product_id"])){
                    $product_id = $_POST["product_id"];
                    if (isset($_SESSION["cart-item"][$product_id])){
                        unset($_SESSION["cart-item"][$product_id]);
                    }
                }
                break;

            default:
                echo "Hành động không tồn tại";
                die;
        }
    }
    echo '<br> $_POST';
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo '<br> $_SESSION';
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
}

/*header("Location: http://localhost:8080/1909ephp/CartPHP/Shopping_Cart.php");
die();*/