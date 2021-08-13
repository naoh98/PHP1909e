<?php
namespace App\Controller\Backend;
use App\Model\Backend\CommentModel;

class Comment
{
    public function getComment(){
        echo "</br>".__METHOD__;
    }
    public function getComment2(){
        $model = new CommentModel();
        $model->getComment();
    }

}