<?php
function chuvihcn($cd, $cr){
    $chuvi = ($cd+$cr)*2;
    return $chuvi;
}

$cd = 5;
$cr = 3;
$cv = chuvihcn($cd,$cr);
echo $cv;