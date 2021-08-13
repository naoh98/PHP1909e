<?php
if(isset($_POST["name"]) && isset($_POST["pass"])){
    if($_POST["name"] && $_POST["pass"]){
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        if ($name=="hoan" && $pass == "123"){
            header("Location: success.php");
            die;
        }
        header("Location: form.php?mess=fail");
    }
}