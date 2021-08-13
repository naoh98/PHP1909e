<?php
/**
 * Created by PhpStorm.
 * User: Hoan Nguyen
 * Date: 22/07/2021
 * Time: 03:34 PM
 */

class Guest
{
    private $name;
    protected $age = 18;
    public $status;

    public function xem(){
        echo "toi dang xem ".$this->status;
    }
}