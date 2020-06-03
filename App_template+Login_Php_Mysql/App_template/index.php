<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once  "partials/head.php";?>
</head>
<body>

<!-- Header -->
    <?php include_once  "partials/header.php";?>
<!-- /Header -->

<!-- Content -->
    <?php
    if (isset($_GET["page"]) && $_GET["page"]){
        echo $_GET["page"];
        $filepath = dirname(__FILE__) ."/pages/". trim($_GET["page"]). ".php";
        echo "<br> File path: " .$filepath;
        if (file_exists($filepath)){
            include_once "pages/" .trim($_GET["page"]). ".php";
        }else{
            $warn= "Tham số " .$_GET["page"]. " không hợp lệ";
            echo "<script>alert('$warn');</script>";
    ?>
        <h3 style="color: red; text-align: center; margin-top: 20px;"><i><?php echo "Đường dẫn không hợp lệ"; ?></i></h3>
    <?php
        }
    }else{
        include_once  "pages/home.php";
    }
    ?>
<!-- Content -->

<!-- Footer -->
    <?php include_once  "partials/footer.php";?>
<!-- /Footer -->

<!-- jQuery Plugins -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
