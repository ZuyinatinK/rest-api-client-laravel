<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">

     <title>Program Elektronika</title>

     <!-- Bootstrap CSS CDN -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
     <!-- Our Custom CSS -->
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
          <link rel="stylesheet" href="stylee.css">

     <!-- Font Awesome JS -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

     <script>
               $(document).ready(function() {
                    $('[data-toggle="tooltip"]').tooltip();
                    $('#tabel-undangan').DataTable();
               });
     </script>

</head>

<body>
     <div class="wrapper" style="background-color: #FFDADA;">
          <!-- Sidebar  -->
          <nav id="sidebar" style="background-color: #BB371A;">
               <div class="sidebar-header">
                    <h3>Toko Handphone dan Laptop</h3>
               </div>

               <ul class="list-unstyled components">
                    <p>19650013 - Zuyinatin K.</p>
                    <li>
                         <a href="handphone.php">Daftar Handphone</a>
                    </li>
                    <li>
                         <a href="laptop.php">Daftar Laptop</a>
                    </li>
                    <li>
                         <a href="addhandphone.php">Insert Handphone</a>
                    </li>
                    <li>
                         <a href="addlaptop.php">Insert Laptop</a>
                    </li>
               </ul>
          </nav>
          