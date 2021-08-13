<?php
/**
 * Created by PhpStorm.
 * User: Hoan Nguyen
 * Date: 22/07/2021
 * Time: 03:43 PM
 */
include_once "mod.php";

class admin extends mod
{
    public $sdt;
     public function quanly(){
         echo "toi dang quan ly";
     }
     public function tuoi(){
         echo  $this->age;
     }

}