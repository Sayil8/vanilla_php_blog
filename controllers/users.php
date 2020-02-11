<?php
namespace Controllers;

use Models\Entry;
use Models\User;

class Users{

    public static function create_user($username, $email, $password){
        $user = User::create(['user'=>$username, 'email'=>$email, 'pass'=>$password]);
        return $user;
    }
}