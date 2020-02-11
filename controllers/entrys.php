<?php

namespace Controllers;

use Models\Entry;

class Entrys{
    
    public static function create_entry($title, $content, $user_id){
        $entry = Entry::create(['title'=>$title, 'content'=>$content, 'user_id'=>$user_id]);
        return $entry;
    }
}