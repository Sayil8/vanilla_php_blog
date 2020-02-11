<?php

    //require 'localhost/blog/vendor/autoload.php';
    //include '../config/conf.php';

    class App{
        function __construct()
        {
            if($_SERVER['REQUEST_URI'])
            $url = $_SERVER['REQUEST_URI'];
            $url = rtrim($url,'/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
 

            if(empty($url[2])){
                require 'controllers/main.php';
                $controller = new main();
                //$controller->render();
                exit();
            }  
             
            $file = 'controllers/'.$url[2].'.php';
            if(file_exists($file))
                require $file;
            else
                $this->error();
        
            $controller = new $url[2];
            
            if(isset($url[4])){
                if(method_exists($controller, $url[3]))
                    $controller->{$url[3]}($url[4]);
                else
                    $this->error();
            }else{
                if(isset($url[3])){
                    if(method_exists($controller, $url[3]))
                        $controller->{$url[3]}();
                    else
                        $this->error();
    
                }
                //else
                    //$controller->render();
            }


       }

       private function error(){
        require 'controllers/err.php';
		$err = new Err();
		exit();
       }
    }