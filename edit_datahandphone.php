<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];

$client = new Client([
     'base_uri' => 'http://127.0.0.1:8000',
     'timeout' => 5
]);

$response =  $client->request('PUT','/api/handphone',[
     'json' => [
          'id' => $id,
          'nama' => $_POST['nama'],
          'tipe' => $_POST['tipe'],
          'ram' => $_POST['ram'],
          'rom' => $_POST['rom'],
          'harga' => $_POST['harga']
     ]
]);

$body = $response->getBody();
header('location:handphone.php')

?>
