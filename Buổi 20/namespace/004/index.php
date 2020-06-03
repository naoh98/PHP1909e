<?php
include_once "app/controller/controller.php";
include_once "app/controller/frontend/index.php";
include_once "app/controller/frontend/post.php";
include_once "app/controller/backend/index.php";
include_once "app/controller/backend/post.php";
include_once "app/model/backend/index.php";

use \App\Controller\Backend\IndexController;
use \App\Model\Backend\IndexModel;

$indexController = new IndexController();
$indexController->getInfo();

$indexController = new IndexModel();
$indexController->getInfo();

