<?php

namespace Core;
use duncan3dc\Laravel\BladeInstance;

abstract class Controller
{
    protected $route_params = [];
    protected $blade;
   
    public function __construct($route_params)
    {
        $this->route_params=$route_params;
        $this->blade = new BladeInstance("../App/Views/", "../App/cache/views");
        
    }
    
    public function __call($name , $args)
    {
        $method = $name .'Action';
        
        if(method_exists($this , $method))
        {
            if($this->before()!==false){
                call_user_func_array([$this,$method],$args);
                $this->after();
             }
        }
        else
        {
            echo "Method $method not found in controller ".get_class($this);
        }
    }
    
    protected function before()
    {
        
    }
    
    protected function after()
    {
        
    }
}