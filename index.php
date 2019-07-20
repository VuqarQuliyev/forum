
<?php


require 'vendor/autoload.php';

use GuzzleHttp\Client;


$client = new Client([
    'curl' => [
        CURLOPT_SSL_VERIFYPEER => false
    ],
    'base_uri' => 'https://jsonplaceholder.typicode.com/'
]);

$res = $client->request('GET', 'posts');

$posts = json_decode($res->getBody());

print_r($posts);
