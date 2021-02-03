<html lang="en" class="">
   <head>     
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="3pkVF104UQ3bOQneKTdZMqWsyHKwEkGcV3hbp6yr">
      <title itemprop="name">PHP GHMEDIC - CRUD</title>
      <link href="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/brand/favicon.png" rel="icon" type="image/png">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Icons -->
      <link href="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/nucleo/css/nucleo.css" rel="stylesheet">
      <link href="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
      <link rel="stylesheet" href="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
      <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
      <!-- Argon CSS -->
      <link type="text/css" href="https://argon-dashboard-pro-laravel.creative-tim.com/css/argon.css?v=2.0.0" rel="stylesheet">

   </head>
   <body class="g-sidenav-show g-sidenav-pinned">
   
      
      <div class="main-content">
         <!-- Top navbar -->
         <?php 
            require_once('backend/db.php');
         ?>
         <?php
			if(isset($_GET['aksi']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($mysqli,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($mysqli, "SELECT * FROM empleado WHERE id='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($mysqli, "DELETE FROM empleado WHERE id='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
			?>

         <div class="header bg-primary pb-6">
            <div class="container-fluid">
               <div class="header-body">
                  <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Datatables</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                           <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                              <li class="breadcrumb-item active" aria-current="page">Datatables</li>
                           </ol>
                        </nav>
                     </div>
                     <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#modal-default">New</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid mt--6">
            <!-- Table -->
            <div class="row">
               <div class="col">
                  <div class="card">
                     <!-- Card header -->
                     <div class="card-header">
                        <h3 class="mb-0">Usuarios</h3>
                       
                        
                     </div>
                     <div class="table-responsive py-4">
                        <div id="datatable-basic_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <!--table class="table table-flush dataTable" id="datatable-basic" role="grid" aria-describedby="datatable-basic_info"-->
                           <table id="example" class="display table table-flush dataTable" style="width:100%">
                              <thead>
                                  <tr>
                                      <th></th>
                                      <th>First name</th>
                                      <th>Edad</th>
                                      <th>Departamento</th>
                                      <th>Actions</th>
                                       
                                  </tr>
                              </thead>
                              <tbody>
                                 <?php require_once('backend/forms/getusers.php'); ?>
                              </tbody>
                              <tfoot>
                                  <tr>
                                     <th></th>
                                      <th>First name</th>
                                      <th>Edad</th>
                                      <th>Departamento</th>
                                      <th>Actions</th>
                                  </tr>
                              </tfoot>
                           </table>
                        </div>
                     </div>
                  </div>
               
               </div>
            </div>
            <?php include('backend/forms/add.php') ?>
            <!-- Footer -->
            <footer class="footer pt-0">
               <div class="row align-items-center justify-content-lg-between">
                  <div class="col-xl-6">
                     <div class="copyright text-center text-lg-left text-muted">
                        © 2021 <a href="https://datatables.net/" class="font-weight-bold ml-1" target="_blank">Data Table</a>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                           <a href="https://datatables.net/" class="nav-link" target="_blank">Data Table</a>
                        </li>                         
                     </ul>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/jquery/dist/jquery.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/js-cookie/js.cookie.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
      <!-- Optional JS -->
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/chart.js/dist/Chart.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/chart.js/dist/Chart.extension.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
      <!-- Argon JS -->
      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/js/argon.js?v=1.0.1"></script>
      <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <script src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/js/demo.min.js"></script>
      <script>
         $(document).ready(function() {
            $('#example').DataTable();
            
            $(".add_employe").on("submit", function(ev) {
               // body...
               ev.preventDefault();
               var $form = $(this);
               var $button = $form.find("[type='submit']");
               $.ajax({
                  url: $form.attr("action"),
                  method: $form.attr("method"),
                  data: $form.serialize(),
                  dataType: "JSON",
                  beforeSend: function() {
                     $button.css({ "background-color": "#2196F3", "width": "100%" }).text("AGREGANDO...");
                  },
                  success: function(data) {        
                  
                  },
                  error: function(err) {
                     // body...
                     $('#modal-default').modal('toggle');           
                     setTimeout(function() {                      
                        swal("Good job!", "Empledo agregado!", "success");
                     }, 200);
                     location.reload();
                  }
               });
               return false;
            });

            $("#cbx_estado").change(function () {

            $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');

            $("#cbx_estado option:selected").each(function () {
               id_estado = $(this).val();
               $.post("includes/getMunicipio.php", { id_estado: id_estado }, function(data){
                  $("#cbx_municipio").html(data);
               });            
            });
            })

         });
      </script>
   </body>
</html>