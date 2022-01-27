<?php
    class App{
        protected $controller="home";
        protected $action="helloWorld";
        protected $params=[];
        function __construct(){
            $arr = $this->urlProcess();
            //XU LY CONTROLLER
            if(file_exists("./mvc/controllers/".$arr[0].".php")){
                $this->controller = $arr[0];
                unset($arr[0]);
            }
            require_once "./mvc/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;

            //XU LI ACTION
            if(isset($arr[1])){
                if(method_exists($this->controller,$arr[1])){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }
            //XU LI PARAM
            $this->params = $arr?array_values($arr):[];

            call_user_func_array([$this->controller, $this->action], $this->params);
        }
        function urlProcess(){
            if(isset($_GET['url'])){
                return explode("/", filter_var(trim($_GET['url'], "/")));
            }
        }
    }
?>