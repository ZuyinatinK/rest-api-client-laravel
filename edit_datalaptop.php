<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];

$client = new Client([
     'base_uri' => 'http://127.0.0.1:8001',
     'timeout' => 5
]);

$response =  $client->request('PUT','/api/smartphone',[
     'json' => [
          'id' => $id,
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
