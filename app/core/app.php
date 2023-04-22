<?php

namespace MVC\core;
//MVC\core\app
class app{ 
    /*يفك url 
    ويرندر الكنترولرز
    */

    private $controller = 'home';
    private $method = 'index';
    private $params = [];
    //construct function
    public function __construct()
    {
        $this->url();
        $this->render();
    }

    //url function 
    private function url(){
        if (!empty($_SERVER['QUERY_STRING']))// to sure that is there query string or no
        {
            $url= explode("/",$_SERVER['QUERY_STRING']);
            //controller
            $this->controller=isset($url[0])?$url[0]."controller":"homecontroller";
            //method
            $this->method=isset($url[1]) ? $url[1] : "index";
            unset($url[0],$url[1]);
            //params
            $this->params=array_values($url);
            

            
        }else{
            $this->controller='homecontroller';
            $this->method='index';
        }
    }

    //render function 
    private function render(){
        $controller="MVC\controllers\\".$this->controller;
        if (class_exists($controller)){
            $controller=new $controller; // create object
            if (method_exists($controller,$this->method)){
                call_user_func_array([$controller,$this->method], $this->params); 
                //call...-> بتشغل الميثود
            }else
            {//method
                echo "Method ".$this->method." Not found";
            }
        }else
        { //class
            echo "class not found";
        }
    }



}






