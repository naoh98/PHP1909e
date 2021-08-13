<?php
/**
 * Created by PhpStorm.
 * User: Hoan Nguyen
 * Date: 22/07/2021
 * Time: 03:42 PM
 */
include_once "Guest.php";

class mod extends Guest
{
    public $sex;
    public static $fav;
    public function sua(){
        echo "toi dang chinh sua";
    }
    public static function xoa(){
        echo "toi dang xoa".self::$fav;
    }
}