<?php

/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 01.04.2016
 * Time: 17:48
 */
class Router{

    private $routes;

    public function __construct(){
        $routerPath = ROOT.'/config/routes.php';
        $this->routes = require($routerPath);
    }

    /*
     * return request string
     */
    private function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run(){
        //получить строку запроса
        $url = $this->getURI();

        //проверить наличие запроса в routes.php

        foreach($this->routes as $urlPattern => $path){

            //сравниваем $urlPattern и $url
            if(preg_match("~$urlPattern~", $url)){

                echo '<br>Где имеем: ' . $url;
                echo '<br>Что имеем: ' . $urlPattern;
                echo '<br>Кто обрабатывает: ' . $path . "<br>";

                //получаем внутренний путь из внешнего согласно правилу
                $internalRoute = preg_replace("~$urlPattern~", $path, $url);

                echo '<br> Формируем запрос: ' . $internalRoute . '<br>';

                //определить контлоллер и экшен
                $segments = explode('/', $path);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));

                //подключить файл класса контроллера

                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if(file_exists($controllerFile)){
                    include_once ($controllerFile);
                }
                
                $controllerObject = new $controllerName;
                $result = $controllerObject->$actionName();
                if($result != null){
                    break;
                }
            }

        }
    }
}