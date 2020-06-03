<?php

class Demo{
    public static $pro1;
    public $pro2;

    public function method1(){
        echo "<br>Method 1";
    }
    public static function method2(){
        echo "<br> Static Method 1";
    }
}

$demo1 = new Demo();
$demo1->pro2 = "Hello";
$demo1->method1();