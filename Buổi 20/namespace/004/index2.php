<?php
include_once "app/controller/controller.php";
include_once "app/controller/frontend/index.php";
include_once "app/controller/frontend/post.php";
include_once "app/controller/backend/index.php";
include_once "app/controller/backend/post.php";
include_once "app/model/backend/index.php";

use \App\Controller\Backend\IndexController as BE_controller;
use \App\Controller\Frontend\IndexController as FE_controller;

$indexController = new BE_controller();
$indexController->getInfo();

$indexController = new FE_controller();
$indexController->getInfo();

