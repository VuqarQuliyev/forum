<?php

namespace App\Poster;

require '../vendor/autoload.php';

use GuzzleHttp\Client;

class Poster
{
    private $client;


    public function __construct()
    {
        $this->client = new Client([
            'curl' => [
                CURLOPT_SSL_VERIFYPEER => false
            ],
            'base_uri' => 'https://jsonplaceholder.typicode.com/'
        ]);
    }

    public function getPosts()
    {
        $res = $this->client->request('GET', 'posts');

        $posts = json_decode($res->getBody());

//        print_r($posts); exit;

        return $posts;

        $posts = [
            [
                'title' => 'Lorem ipsum doler umet',
                'body' => 'hnhnhhbmbmnfsdfsdfsdfsdfs'
            ],
            [
                'title' => 'Lorem ipsum doler umet',
                'body' => 'hnhnhhbmbmnfsdfsdfsdfsdfs'
            ],
            [
                'title' => 'Lorem ipsum doler umet',
                'body' => 'hnhnhhbmbmnfsdfsdfsdfsdfs'
            ],
            [
                'title' => 'Lorem ipsum doler umet',
                'body' => 'hnhnhhbmbmnfsdfsdfsdfsdfs'
            ],
            [
                'title' => 'Lorem ipsum doler umet',
                'body' => 'hnhnhhbmbmnfsdfsdfsdfsdfs'
            ],
            [
                'title' => 'Lorem ipsum doler umet',
                'body' => 'hnhnhhbmbmnfsdfsdfsdfsdfs'
            ],
            [
                'title' => 'Lorem ipsum doler umet',
                'body' => 'hnhnhhbmbmnfsdfsdfsdfsdfs'
            ]
        ];


    }

    function getPostById($id)
    {
        $query = 'posts/'.$id;

        $res = $this->client->request('GET', $query);

        $postRes = \GuzzleHttp\json_decode($res->getBody());

        return $postRes;

    }



}


class Test
{

}