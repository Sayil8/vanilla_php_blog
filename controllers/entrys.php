<?php
namespace Controllers;

use Models\Entry;
use Elasticsearch\ClientBuilder;
 

class Entrys{
    

    public static function create_entry($title, $content, $user_id){
        
        
        $entry = Entry::create(['title'=>$title, 'content'=>$content, 'user_id'=>$user_id]);

        
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => 'my_index',
            'id'    => 'my_id',
            'body' => [
                'title' => $title,
                'content' => $content,
                'user_id' => $user_id,
                'post_id' => $entry->id
            ]
        ];
        
        $response = $client->index($params);

        return $entry;
    }
}