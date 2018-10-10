<?php

namespace App\Controllers;

use App\Models\Post;


class Posts extends \Core\Controller
{
    public function indexAction ()
    {
        $posts=Post::getAll();
        //var_dump($posts);
        echo $this->blade->render("Posts.index",['posts'=>$posts]);
        
    }
    public function addNewAction()
    {
        
        $host = "localhost";
        $db_name = "mvc";
        $user = "abde09";
        $password = "kaoutar";
        
        /**
         * Create a connection
         */
        $conn = new \mysqli($host, $user, $password, $db_name);
        
        /**
         * Check the connection
         */
        if ($conn->connect_error) {
            echo "Connection failed: " . $conn->connect_error;
        } else {
            echo "Connected successfully, connection data are ok.";
        }
       
    }
    public function editAction()
    {
     echo 'Hello from the edit action in the Posts controller!';
    }
    protected function before()
    {
        //echo " before ";
    }
    protected function after()
    {
        //echo " after ";
    }
}