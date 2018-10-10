<?php

require __DIR__.'/../vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__."/../");
$dotenv->load();

/*spl_autoload_register(function($class){
  $rout = dirname(__DIR__);
  $file = $rout . '/' . str_replace('\\','/',$class) . '.php';
   
  if(is_readable($file)){
      require $rout . '/' . str_replace('\\','/',$class) . '.php';
  }
});*/



$router = new Core\Router();
$url=$_SERVER['QUERY_STRING'];


$router->add('',['controller'=>'Home','action'=>'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}',['namespace'=>'Admin']);



$router->despatch($url);
?>