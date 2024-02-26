<?php require_once('Connections/cnx.php'); ?>
<?php require_once('Connections/infousers.php'); ?>
<?php include('includes/contadores.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario 2018</title>
    <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Switchery css -->
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />	
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <!-- BEGIN CSS for this page -->
    <!-- END CSS for this page -->
    <style>
        .parsley-error {
            border-color: #ff5d48 !important;
        }
        .parsley-errors-list.filled {
            display: block;
        }
        .parsley-errors-list {
            display: none;
            margin: 0;
            padding: 0;
        }
        .parsley-errors-list > li {
            font-size: 12px;
            list-style: none;
            color: #ff5d48;
            margin-top: 5px;
        }
        .form-section {
            padding-left: 15px;
            border-left: 2px solid #FF851B;
            display: none;
        }
        .form-section.current {
            display: inherit;
        }
        </style>
</head>
<body class="adminbody">
    <div id="main">
        <!-- top bar navigation -->
        <?php include('includes/headerbar_admin.php'); ?>
        <!-- End Navigation -->
        <!-- Left Sidebar -->
        <?php include('includes/leftmainsidebar_admin.php'); ?>
        <!-- End Sidebar -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Lista de Reportes</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"> <a href="controlpanel_admin.php">Inicio </a> </li>
                                    <li class="breadcrumb-item active"> <a href="productos_control.php"> Panel Reportes </a> </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- CONTENIDO DE LA PAGINA-->
                    <div class="row">
                        <div class="col-xl-12">	
                        <h3><img src="images/bicicleta.jpg" width="50" height="50" alt="" class="img-rounded"/> REPORTES </h3>								
                            <div class="card">
                                <div class="card-block">
                                    <div class="container-fluid">
                                        <table class="table table-bordered" >
                                            <thead>
                                            <tr>
                                                <th>Reporte</th>
                                                <th>Descarga</th>
                                            </tr>
                                            </thead>

                                            <tr>
                                                <td>Lista De Mantenimiento</td>
                                                <td><a href="reportemantenimiento_excel.php"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a></td>
                                            </tr>
                                        </table>
                                </div>
                                <div class="card-footer text-muted">
                                footer
                                </div>
                            </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <!-- END container-fluid -->
            </div>
            <!-- END content -->
        </div>
        <!-- END content-page -->
        <?php include('includes/footer_admin.php'); ?>
    </div>
    <!-- END main -->
    <?php include('includes/scripts_admin.php'); ?>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>   

<!-- BEGIN Java Script for this page -->
<script src="assets/plugins/parsleyjs/parsley.min.js"></script>
<script>
  $('#form').parsley();
</script>
</body>
</html>