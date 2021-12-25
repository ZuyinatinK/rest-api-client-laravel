<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
     'base_uri' => 'http://127.0.0.1:8001',
     'timeout' => 5
]);

$response =  $client->request('POST','/api/smartphone',[
     'json' => [
          'nama' => $_POST['nama'],
          'tipe' => $_POST['tipe'],
          'ram' => $_POST['ram'],
          'prosesor' => $_POST['prosesor'],
          'harga' => $_POST['harga']
     ]
]);

$body = $response->getBody();
header('location:laptop.php')

?>