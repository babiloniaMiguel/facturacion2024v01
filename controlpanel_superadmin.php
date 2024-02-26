<?php require_once('Connections/cnx.php'); ?>
<?php require_once('Connections/infousers.php'); ?>
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
    <!-- BEGIN CSS for this page -->

    <!-- END CSS for this page -->
</head>
<body class="adminbody">
    <div id="main">
        <!-- top bar navigation -->
        <?php include('includes/headerbar_superadmin.php'); ?>
        <!-- End Navigation -->
        <!-- Left Sidebar -->
        <?php include('includes/leftmainsidebar_superadmin.php'); ?>
        <!-- End Sidebar -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">PANEL DE CONTROL SUPERADMINISTRADOR</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Inicio</li>
                                    <li class="breadcrumb-item active">Pagina Actual</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- CONTENIDO DE LA PAGINA-->
                        <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Info!</h4>
                        <p>El Panel de Control es una parte de la interfaz gráfica de Microsoft Windows, la cual permite a 
                        los usuarios ver y manipular ajustes y controles básicos del sistema, tales como agregar nuevo hardware, 
                    desinstalar programas instalados, gestionar las cuentas de usuario de Windows, tener acceso a 
                opciones de accesibilidad, entre otras opciones de sonido y pantalla. Otros Applets adicionales 
            pueden ser proporcionados por software de terceros.</p>
                    </div>
                    <div class="alert alert-success" role="alert">
<div align="center"><img src="images/loginsuperadmin.jpg" width="1050" height="550" alt="" id="imagen1"/></div>
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
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>            
    <script>
        $(document).ready(function() {
            // data-tables
            $('#example1').DataTable();
                    
            // counter-up
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });
        } );        
    </script>
    
</body>
</html>