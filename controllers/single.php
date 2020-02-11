<?php

use Models\Entry;

class Single extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    public function index($id){
        
        $entry = Entry::where('id',$id)
        ->first();
        if($entry->title == null){
            header('Location: http://localhost/blog/index.php');
        }else{

            if(isset ($_SESSION['user'])){
                $ses =  $_SESSION['user'];
            //echo $twig->render('single.html.twig', ['entry' => $entry,'session' => $ses]);
                $this->view->render('single.html.twig', $entry);
            }
            else
        //echo $twig->render('single.html.twig', ['entry' => $entry]);
                $this->view->render('single.html.twig', $entry);
            
        }
    }
}

