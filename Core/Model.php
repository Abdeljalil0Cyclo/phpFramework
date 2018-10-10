<?php

namespace Core;

use PDO;

abstract class Model
{
    protected static function getDB()
    {
        static $db = null;
        if($db===null)
        {
            $host = getenv('DB_HOST');
            $db_name = getenv('DB_NAME');
            $user = getenv('DB_USER');
            $password = getenv('DB_PASS');
            
            try 
            {
              $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8",$user,$password);
            } catch (PDOException $e ) {
                echo $e->getMessage();
            }
        }
        return $db;
        
    }
}