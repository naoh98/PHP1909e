<?php
/**
 * Created by PhpStorm.
 * User: Hoan Nguyen
 * Date: 22/07/2021
 * Time: 03:45 PM
 */

include_once "admin.php";
include_once "Guest.php";
include_once "mod.php";

$guest1 = new Guest();
$guest1->status="hoan";
$guest1->xem();

$mod1 = new mod();
$mod1->status = "hieu";
$mod1->xem();

$admin1 = new admin();
$admin1->status="dat";
$admin1->xem();
$admin1->tuoi();

mod::$fav="test1";
mod::xoa();