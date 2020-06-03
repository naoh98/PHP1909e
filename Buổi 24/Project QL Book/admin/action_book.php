<?php
include_once "../config/connection.php";
if (isset($_POST["action"])){
    if($_POST["action"]== "edit"){

    }elseif ($_POST["action"]== "delete"){

    }else{

        $bookfield = ["bookname","bookintro","bookthumbnail","bookimages","bookprice","booksell","author",
            "publisher","bookhit","bookbuy","bookstatus","bookdesc","created","updated"];

        $bookfieldnotquote = ["bookprice","booksell","bookhit","bookbuy","bookstatus"];

        $data = [];
        foreach ($bookfield as $fieldname){
            if (isset($_POST[$fieldname])){
                if (!in_array($fieldname,$bookfieldnotquote)){
                    $data[$fieldname] = " ' " .$_POST[$fieldname]. " ' ";
                }else{
                    $data[$fieldname] = $_POST[$fieldname];
                }
            }else{
                if($fieldname == "created" || $fieldname =="updated"){
                    if (!in_array($fieldname,$bookfieldnotquote)){
                        $data[$fieldname] = " ' " .date("Y-m-d H:i:s"). " ' ";
                    }
                }
            }
        }
        echo "<pre>";
        print_r($data);
        echo "</pre>";


        $fieldSQL = implode(",",$bookfield );
        $fieldValue = implode(",",$data);

        $sqlinsert ="INSERT INTO books($fieldSQL) VALUES ($fieldValue)";
        echo "<br>" .$sqlinsert. "<br>";

        $insertFlag = $connection->query($sqlinsert);
        var_dump($insertFlag);
        die;
    }
}
?>