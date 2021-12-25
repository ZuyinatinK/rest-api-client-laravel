<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
     'base_uri' => 'http://127.0.0.1:8001',
     'timeout' => 5
]);

$response =  $client->request('GET','/api/smartphone');
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

          <h2>Data Laptop</h2>
          <div class="container-xl">
               <div class="table-responsive">
                    <div class="table-wrapper">
                         <div class="table-title">
                         <div class="row">
                                   <div class="col-sm-5">
                                        <h2>Daftar <b>Laptop</b></h2>
                                   </div>
                                   <div class="col-sm-7">
                                   <a href="addlaptop.php" class="btn btn-secondary"><span class="material-icons-outlined">Tambah Data</span></a>
                                   </div>
                              </div>
                              </div>
                              <table class="table table-striped table-hover" id="tabel-undangan" style="width: 100%;">
                              <thead>
                                   <tr>
                                        <th>No.</th>
                                        <th>Nama HandPhone</th>
                                        <th>Tipe HandPhone</th>
                                        <th>RAM HandPhone</th>
                                        <th>Prosesor HandPhone</th>
                                        <th>Harga HandPhone</th>
                                        <th>Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                   $no = 1;
                                   foreach($data_body as $data) { ?>
                                        <tr>
                                             <td><?php echo $no++;?></td>
                                             <td><?php echo $data->nama;?></td>
                                             <td><?php echo $data->tipe;?></td>
                                             <td><?php echo $data->ram;?></td>
                                             <td><?php echo $data->prosesor;?></td>
                                             <td><?php echo $data->harga;?></td>
                                             <td>
                                                  <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-bottom:20px;margin-right:20px;">
                                                       <a href="editlaptop.php?id=<?php echo $data->id;?>"><button class="btn btn-warning" style="margin-right: 10px;">Edit</button></a>
                                                       <a href="deletelaptop.php?id=<?php echo $data->id;?>"><button class="btn btn-danger" onclick="return confirm('Yakin ingin hapus ?')">Delete</button></a>
                                                  </div>
                                             </td>
                                        </tr>
                                   <?php } ?>
                              </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <?php include "footer.php"; ?>