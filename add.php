<html>
     <head>
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="style.css">
          <!-- datatable -->
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
          <!-- end datatable -->

          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

          <script>
               $(document).ready(function() {
                    $('[data-toggle="tooltip"]').tooltip();
                    $('#tabel-undangan').DataTable();
               });
          </script>

     </head>

     <body>
          <div class="container-xl">
               <div class="table-responsive">
                    <div class="table-wrapper">
                         <div class="table-title">
                         <div class="row">
                              <div class="col-sm-5">
                                   <h2>Tambah <b>HandPhone</b></h2>
                              </div>
                              <div class="col-sm-7">
                                   <a href="index.php" class="btn btn-secondary"><span class="material-icons-outlined">Kembali</span></a>
                              </div>
                         </div>
                         </div>
                         <form action="add_data.php" method="POST">
                         <div class="mb-3">
                              <label for="nama" class="form-label">Nama HandPhone</label>
                              <input type="text" class="form-control" id="nama" name="nama" required>
                         </div>
                         <div class="mb-3">
                              <label for="tipe" class="form-label">Tipe HandPhone</label>
                              <input type="text" class="form-control" id="tipe" name="tipe" required>
                         </div>
                         <div class="mb-3">
                              <label for="ram" class="form-label">RAM HandPhone</label>
                              <input type="text" class="form-control" id="ram" name="ram" required>
                         </div>
                         <div class="mb-3">
                              <label for="rom" class="form-label">ROM HandPhone</label>
                              <input type="text" class="form-control" id="rom" name="rom" required>
                         </div>
                         <div class="mb-3">
                              <label for="harga" class="form-label">Harga HandPhone</label>
                              <input type="text" class="form-control" id="harga" name="harga" required>
                         </div>
                         <button type="submit" class="btn btn-success">Submit</button>
                         </form>
                    </div>
               </div>
          </div>

     </body>
</html>