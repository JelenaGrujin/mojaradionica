<?php
namespace Admin\classes;

class Route{
   
    public static $_routes=array();
    
    public static function set($route, $function) {
        
        $_routes[$route]=$function;
        
        if ($route==$_GET['url']) {
            $function=$_routes[$route];
            
            $this->function;
        }
        
       
    }
}


?>