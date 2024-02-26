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
    <!-- BEGIN CSS for this page -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <!-- END CSS for this page -->
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
                                <h1 class="main-title float-left">PANEL DE CONTROL</h1>
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
                        <h4 class="alert-heading">Informacion!</h4>
                        <p>El Panel de Control es una parte de la interfaz gráfica de Microsoft Windows, la cual permite a 
                        los usuarios ver y manipular ajustes y controles básicos del sistema, tales como 
                    agregar nuevo hardware, desinstalar programas instalados, gestionar las cuentas de 
                usuario de Windows, tener acceso a opciones de accesibilidad, entre otras opciones 
            de sonido y pantalla. Otros Applets adicionales pueden ser proporcionados por software de terceros.</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-default">
                                <i class="  fa fa-briefcase float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Productos</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo $numero_productos; ?></h1>
                                <span class="text-white">Ultimas Entradas</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fa fa-shopping-basket float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Compras</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo $numero_compras; ?></h1>
                                <span class="text-white">Ultimas Entradas</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-danger">
                                <i class="fa fa-truck float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Ventas</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo $numero_ventas; ?></h1>
                                <span class="text-white">Ultimas Entradas</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-info">
                                <i class="fa fa-user-o float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Usuarios</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo $numero_usuarios; ?></h1>
                                <span class="text-white">Ultimas Entradas</span>
                            </div>
                        </div>


                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-10">                      
                                        <div class="card mb-3">
                                            <div class="card-header">
                                                <h3><i class="fa fa-line-chart"></i> Items Sold Amount</h3>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                            </div>
                                                
                                            <div class="card-body">
                                                <canvas id="lineChart"></canvas>
                                            </div>                          
                                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                        </div><!-- end card-->                  
                                    </div
                <!-- END container-fluid -->
            </div>

            <!-- END content -->
        </div>

        <!-- END content-page -->
        <?php include('includes/footer_admin.php'); ?>
    </div>
    <!-- END main -->
    <?php include('includes/scripts_admin.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <!-- Counter-Up-->
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
    
    <script>
    var ctx1 = document.getElementById("lineChart").getContext('2d');
    var lineChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    label: 'Datos',
                    backgroundColor: '#3EB9DC',
                    data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9] 
                }]
                
        },
        options: {
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        responsive: true,
                        scales: {
                            xAxes: [{
                                stacked: true,
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    }
    });


    </script>
<!-- END Java Script for this page -->
    
</body>
</html>