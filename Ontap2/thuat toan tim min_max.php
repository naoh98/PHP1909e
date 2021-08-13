<?php
function tim_min($arr){
    $min =0;
    for ($i=0;$i<count($arr);$i++){
        if ($arr[$min]>$arr[$i]){
            $min=$i;
        }
    }
    return $arr[$min];
}
$arr1=[8,3,5,8,0,31,56,1];
echo tim_min($arr1);