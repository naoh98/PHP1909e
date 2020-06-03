<?php
include_once "app/controller/controller.php";
include_once "app/controller/frontend/index.php";
include_once "app/controller/frontend/post.php";
include_once "app/controller/backend/index.php";
include_once "app/controller/backend/post.php";

$indexController = new \App\Controller\Backend\IndexController();
$indexController->getInfo();

$indexController = new \App\Controller\Frontend\IndexController();
$indexController->getInfo();

