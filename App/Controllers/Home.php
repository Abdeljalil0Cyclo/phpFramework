<?php

namespace App\Controllers;
use Core\View;


class Home extends \Core\Controller
{
    public function indexAction ()
    {
        //View::renderTemp('Home/index.html',['name' => 'Dave','colours' => ['red', 'green', 'blue']]);
        echo $this->blade->render("Home.index");
        
    }
    
    protected function before()
    {
      

        
    }
    protected function after()
    {
        
    }

}