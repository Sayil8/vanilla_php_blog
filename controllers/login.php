<?php
        use Models\User;

        class Login extends Controller{

            function __construct()
            {
                parent::__construct();
                session_destroy();
                $this->view->render('login.php.twig');
            
                if(isset($_POST['name']) && $_POST['pass'] ){
                    $name = $_POST['name'];
                    $pass = $_POST['pass'];
        
                    $ent = User::where('email',$name)
                                ->where('pass',$pass)
                                ->first();
        
                    if($ent == null){
                        echo "Credenciales incorrectas";
                        exit();
                    }
                    session_start();
                    $_SESSION['user'] = $ent->user;
                    header("Location: http://localhost/blog");
                }
            }
        }
       
            
        
            
        

