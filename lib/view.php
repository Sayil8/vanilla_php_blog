<?php

class View{

    public $twig;

    function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('views');
        $this->twig = new \Twig\Environment($loader,[]);
        $this->twig->addGlobal('session', $_SESSION);
    }
    public function render($name, $args=null){

        echo $this->twig->render($name, ['entries' => $args]);
    }
}