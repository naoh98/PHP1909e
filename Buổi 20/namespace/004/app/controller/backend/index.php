<?php
namespace App\Controller\Backend;
use App\Model\Backend\IndexModel;

class IndexController{
    public function getInfo(){
        echo "<br>" . __METHOD__;
    }

    public function getInfo2(){
        $model = new IndexModel();
        $model->getAll();
    }
}