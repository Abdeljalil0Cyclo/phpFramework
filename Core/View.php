<?php

namespace Core;

class view 
{
        public static function render($view , $args=[])
        {
            extract($args, EXTR_SKIP);
            
            $file ="../App/Views/$view";
            if(is_readable($file))
            {
                require($file);
            }
            else
            {
                echo "$file not found";
            }
        }
        
        public static function renderTemp($temp , $args=[])
        {
            static $twig = null;
            if($twig===null)
            {
              $loader = new \Twig_Loader_Filesystem('../App/Views');
              $twig = new \Twig_Environment($loader, [
                'cache' => false , 'debug' => true
             ]);
            }
            echo $twig->render($temp,$args);
        }
}