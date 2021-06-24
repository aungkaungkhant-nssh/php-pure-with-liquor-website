<?php

class Router{
    protected $routes=[
        "GET"=>[],
        "POST"=>[]
    ];
    public static function load($filename){
        $router=new Router;
        require "$filename";
        return $router;
    }
    public function get($uri,$key){
        $this->routes["GET"][$uri]=$key;
    }
    public function post($uri,$key){
        $this->routes["POST"][$uri]=$key;
    }
    public function direct($uri,$method){
        if(array_key_exists($uri,$this->routes[$method])){
            $explotion=explode("@",$this->routes[$method][$uri]);
            $this->callAction($explotion[0],$explotion[1]);
        }else{
            die("404 page");
        }   
    }
    public function callAction($class,$method){
        $class=new $class;
        $class->$method();
    }
}
