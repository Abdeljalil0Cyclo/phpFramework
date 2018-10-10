<?php

namespace App\Controllers\Admin;

class Users extends \Core\Controller
{
    protected function before()
    {
        echo " before ";
    }
    
    public function indexAction ()
    {
        echo " Admin Users Index Page";
    }
    
}