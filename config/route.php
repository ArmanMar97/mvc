<?php


class Route{

    public static function buildRoute() {

        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";

        $routes = explode('/',$_SERVER['REQUEST_URI']);

        if (strlen($routes[1])){
            $controllerName = ucfirst($routes[1] . "Controller");
            $modelName =  ucfirst($routes[1] . "Model");
        }

        if (isset($routes[2])){
            $string = $routes[2];
            if (strpos($string,'?')){
                $action = substr($string,0,strpos($string,'?'));
            }
            else{
                $action = $string;
            }
        }

        require_once CONTROLLER_PATH . $controllerName . ".php";
        require_once MODEL_PATH . $modelName . ".php";

        $controller = new $controllerName();
        $controller->$action();
    }



    public function errorPage(){

    }

}