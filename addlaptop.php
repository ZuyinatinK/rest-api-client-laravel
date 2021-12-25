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

          <h2>Form Tambah Data Laptop</h2>

<div class="container-xl">
               <div class="table-responsive">
                    <div class="table-wrapper">
                         <div class="table-title">
                         <div class="row">
                              <div class="col-sm-5">
                                   <h2>Tambah <b>Laptop</b></h2>
                              </div>
                              <div class="col-sm-7">
                                   <a href="index.php" class="btn btn-secondary"><span class="material-icons-outlined">Kembali</span></a>
                              </div>
                         </div>
                         </div>
                         <form action="add_datalaptop.php" method="POST">
                         <div class="mb-3">
                              <label for="nama" class="form-label">Nama Laptop</label>
                              <input type="text" class="form-control" id="nama" name="nama" required>
                         </div>
                         <div class="mb-3">
                              <label for="tipe" class="form-label">Tipe Laptop</label>
                              <input type="text" class="form-control" id="tipe" name="tipe" required>
                         </div>
                         <div class="mb-3">
                              <label for="ram" class="form-label">RAM Laptop</label>
                              <input type="text" class="form-control" id="ram" name="ram" required>
                         </div>
                         <div class="mb-3">
                              <label for="prosesor" class="form-label">Prosesor Laptop</label>
                              <input type="text" class="form-control" id="prosesor" name="prosesor" required>
                         </div>
                         <div class="mb-3">
                              <label for="harga" class="form-label">Harga Laptop</label>
                              <input type="text" class="form-control" id="harga" name="harga" required>
                         </div>
                         <button type="submit" class="btn btn-success">Submit</button>
                         </form>
                    </div>
               </div>
          </div>

          <?php include "footer.php"; ?>