<?php
namespace Controllers;

use Models\Comment;

class Comments{
    public static function create_comment($user_id, $entry_id, $content){
        $comment = Comment::create(['user_id'=> $user_id, 'entry_id'=> $entry_id, 'content'=> $content]);
        return $comment;
    }
}