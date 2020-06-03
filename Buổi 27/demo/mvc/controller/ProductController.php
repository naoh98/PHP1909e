<?php
namespace MVC\Controller;

class ProductController{
    public function indexAction(){
        echo "<br>" .__METHOD__;
        include_once "mvc/view//product/index.php";
    }

    public function editAction(){
        echo "<br>" .__METHOD__;
        include_once "mvc/view//product/edit.php";
    }

    public function deleteAction(){
        echo "<br>" .__METHOD__;
        include_once "mvc/view//product/delete.php";
    }

    public function createAction(){
        echo "<br>" .__METHOD__;
        include_once "mvc/view//product/create.php";
    }
}