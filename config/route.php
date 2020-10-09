<?php


class Route{

    public static function buildRoute(){
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "Index";

        $route = explode("/",$_SERVER['REQUEST_URI']);

        if ($route[1] != ''){
            $controllerName = ucfirst($route[1]. "Controller");
            $modelName = ucfirst($route[1]. "Model");
        }

        require_once CONTROLLER_PATH . $controllerName . ".php";
        require_once MODEL_PATH . $modelName . ".php";

        if (isset($route[2]) && $route[2] != '' ){
            $action = $route[2];
        }


        $controller = new $controllerName;
        $controller->$action();

        return true;

    }


}