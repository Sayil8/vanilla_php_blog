<?php

class Err extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render("err.html.twig");
    }
}