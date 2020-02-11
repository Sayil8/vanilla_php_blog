<?php

use Models\Entry;
use Controllers\Users;
use Controllers\Entrys;
use Controllers\Comments;

class Main extends Controller{
    public function __construct()
    {
        parent::__construct();
        $entries = Entry::orderBy('id', 'DESC')
                    ->paginate(5);
                    

        //login query
          $ent = Entry::where('id',200)->first();
  
      
      //$user = Users::create_user("user1","user@user.com","123");
     
      //$ent = Entrys::create_entry("title1","skaghdsgdahsgfkhagdfhagdkfahdfa","1");
  
      
      //$com = Comments::create_comment("1","1","like");

      $this->view->render('index.php.twig', $entries);


  
          }
    }
