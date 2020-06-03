<?php
echo "<br>Mỗi lần gọi: " .__FILE__;
if(!function_exists("tinhPhinhvuong")){
    function tinhPhinhvuong($c){
        echo "<br>" .__FUNCTION__;
        $p = $c*4;
        return $p;
    }
}