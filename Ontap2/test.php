<?php
function findTheLargestNumber($stringNumber) {
    $arr =str_split($stringNumber);
    $arr2=[];
    for($i=0;$i<count($arr)-1;$i++){
        $j=$i+1;
        $arr2[]=(int)($arr[$i].$arr[$j]);
    }
    return $arr2;
}
$arr=findTheLargestNumber("1234567");
print_r($arr);