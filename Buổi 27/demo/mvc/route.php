<?php
namespace MVC;


use App\Controller\controller;

class Route{
    public function run(){
        //$_REQUEST = $_POST + $_GET
        $controller = (isset($_REQUEST["controller"]) && $_REQUEST["controller"]) ? $_REQUEST["controller"] : "index";
        $action = (isset($_REQUEST["action"]) && $_REQUEST["action"]) ? $_REQUEST["action"] : "index";

        $controller = ucfirst($controller);
        $controllername = "\\MVC\\Controller\\" .$controller. "Controller";
        $actionname = $action ."Action";

        if (class_exists($controllername)){
            $controllerObject = new $controllername();
            if (method_exists($controllerObject,$actionname)){
                $controllerObject->$actionname();
            }else{
                $controllername = "\\MVC\\Controller\\ErrorController";
                $controllerObject = new $controllername;
                $controllerObject->redirect404();
            }
        }else{
            $controllername = "\\MVC\\Controller\\ErrorController";
            $controllerObject = new $controllername;
            $controllerObject->redirect404();
        }

    }
}