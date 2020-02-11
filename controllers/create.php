<?php

use Models\User;
use Controllers\Entrys;

class Create extends Controller{
    function __construct()
    {
        parent::__construct();

        $user_name = $_SESSION['user'];
        $ent = User::where('user',$user_name)->first();
        $this->view->render('create.html.twig',$ent);

        if(isset($_POST['title']) && $_POST['text'] ){
           $ent = Entrys::create_entry($_POST['title'],$_POST['text'],$ent->id); 
           header('Location: http://localhost/blog');
        }  
    }
}