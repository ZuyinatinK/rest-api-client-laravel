<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];

$client = new Client([
     'base_uri' => 'http://127.0.0.1:8000',
     'timeout' => 5
]);

$response =  $client->request('GET','/api/Idhandphone', [
     'json' =>[
          'id'=>$id,
          ]
]);
$body = $response->getBody();
$data_body = json_decode($body);

?>

<?php include "header.php"; ?>

<!-- Page Content Holder -->
<div id="content">
     <nav class="navbar navbar-default">
          <div class="container-fluid">
               <div class="navbar-header">
               <button type="button" id="sidebarCollapse" class="btn btn-danger">
                    <i class="glyphicon glyphicon-align-left"></i>
                    <span>Toggle Sidebar</span>
               </button>
               </div>

               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
               </ul>
               </div>
          </div>
     </nav>

     <h2>Form Edit Data Handphone</h2>
     
     <div class="container-xl">
          <div class="table-responsive">
               <div class="table-wrapper">
                    <div class="table-title">
                         <div class="row">
                              <div class="col-sm-5">
                                   <h2>Edit Handphone</h2>
                              </div>
                              <div class="col-sm-7">
                                   <a href="handphone.php" class="btn btn-secondary"><span class="material-icons-outlined">Kembali</span></a>
                              </div>
                         </div>
                    </div>
                    <form action="edit_datahandphone.php?id=<?php echo $id;?>" method="POST">
                         <div class="mb-3">
                         <div class="mb-3">
                              <label for="nama" class="form-label">Nama Handphone</label>
                              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_body->nama ?>" required>
                         </div>
                              <label for="tipe" class="form-label">Tipe Handphone</label>
                              <input type="text" class="form-control" id="tipe" name="tipe" value="<?php echo $data_body->tipe ?>" required>
                         </div>
                         <div class="mb-3">
                              <label for="ram" class="form-label">RAM Handphone</label>
                              <input type="text" class="form-control" id="ram" name="ram" value="<?php echo $data_body->ram ?>" required>
                         </div>
                         <div class="mb-3">
                              <label for="rom" class="form-label">ROM Handphone</label>
                              <input type="text" class="form-control" id="rom" name="rom" value="<?php echo $data_body->rom ?>" required>
                         </div>
                         <div class="mb-3">
                              <label for="harga" class="form-label">Harga Handphone</label>
                              <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $data_body->harga ?>" required>
                         </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                         </form>
                    </div>
               </div>
          </div>