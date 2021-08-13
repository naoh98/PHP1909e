<?php
/**
 * Created by PhpStorm.
 * User: Hoan Nguyen
 * Date: 22/07/2021
 * Time: 10:13 PM
 */
include_once "hanhdong.php";
include_once "ngua.php";
include_once "oto.php";


$ngua1 = new ngua();
$ngua1->run();
echo $ngua1->chan;
