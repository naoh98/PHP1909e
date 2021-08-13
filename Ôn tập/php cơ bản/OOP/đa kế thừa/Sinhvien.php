<?php
/**
 * Created by PhpStorm.
 * User: Hoan Nguyen
 * Date: 22/07/2021
 * Time: 05:36 PM
 */
include_once "ConNguoi.php";
include_once "trait_hanhdong.php";

class Sinhvien extends ConNguoi
{
    use hanhdong;
 public $masv;
 public function lambai(){
     echo "toi dang lam bai";
 }
}