<?php
namespace MVC\Controller;

class PostController{

    public function indexAction(){
        echo "<br>" .__METHOD__;
        include_once "mvc/view//post/index.php";
    }

    public function editAction(){
        echo "<br>" .__METHOD__;
        include_once "mvc/view//post/edit.php";
    }

    public function deleteAction(){
        echo "<br>" .__METHOD__;
        include_once "mvc/view//post/delete.php";
    }

    public function createAction(){
        echo "<br>" .__METHOD__;
        include_once "mvc/view//post/create.php";
    }

}