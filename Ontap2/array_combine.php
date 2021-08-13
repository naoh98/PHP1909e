<?php
/**
 * Created by PhpStorm.
 * User: Hoan Nguyen
 * Date: 09/08/2021
 * Time: 08:46 PM
 */
$arr1 = ["hello","hi","bye"];
$arr2 = ["xin chao","chao","tam biet"];
$arr = array_combine($arr1,$arr2);
echo "<pre>";
print_r($arr);
echo "</pre>";