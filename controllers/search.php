<?php
use Elasticsearch\ClientBuilder;
class Search extends Controller{

    function __construct()
    {
        parent::__construct();

        $keyword =  $_POST['search'];
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => 'my_index',
            'body'  => [
                'query' => [
                    'match' => [
                        'title' => $keyword,
                    ],
                    'match' => ['user_id' => $keyword]
                ]
            ]
        ];
        
        $response = $client->search($params);
        if($response['hits']['total'] >= 1){
            $res = $response['hits']['hits'];
        }
        $this->view->render('search.html.twig',$res);
    }
}