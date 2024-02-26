<?php require_once('Connections/cnx.php'); ?>
<?php require_once('Connections/infousers.php'); ?>
<?php include('includes/contadores.php'); ?>  
<?php
mysqli_select_db($cnx,$database_cnx);
$query_RstProductos = "SELECT * FROM productos ORDER BY idproducto DESC LIMIT 10";
$RstProductos = mysqli_query($cnx,$query_RstProductos) or die(mysql_error());
$row_RstProductos = mysqli_fetch_assoc($RstProductos);
$totalRows_RstProductos = mysqli_num_rows($RstProductos);
//
function stockbajo($idp)
{
    require('Connections/cnx.php'); 
    mysqli_select_db($cnx,$database_cnx);
//Estudios
    $sql1 = "SELECT * FROM productos WHERE idproducto=$idp";
    $RstResp1 = mysqli_query($cnx,$sql1) or die(mysql_error());
    $row_RstResp1 = mysqli_fetch_assoc($RstResp1);
    $Cantidad=$row_RstResp1['cantidad'];
    $Clase='';

    if ($Cantidad<=3)
    {
        $Clase = 'btn btn-danger';
    }
    elseif ($Cantidad>3 && $Cantidad<=5 ) 
    {
        $Clase = 'btn btn-warning';  
    }
    else 
    {
        $Clase = 'btn btn-success';    
    }
    return $Clase;  
}
?>    
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
    <!-- Resources -->
    <!-- Resources -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <style>
        #container 
        {
            width   : 100%;
            height    : 400px;
            font-size : 11px;
        } 
        #foto {
            height: 50px;
            width: 50px;
            border-radius: 60px;
            border-style: solid;
            border-width: 1px;
            border-color: #f4b906;
            padding: 2px;
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
                    <div class="alert alert-danger" role="alert" style="padding: 10px">
                        <h4 class="alert-heading">PANEL DE CONTROL</h4>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-default">
                                <i class="  fa fa-briefcase float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Productos</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo $numero_productos; ?></h1>
                                <span class="text-white"><a href="productos_list.php" style="color: #fff">Ultimos Productos</a> </span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fa fa-shopping-basket float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Compras</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo $numero_compras; ?></h1>
                                <span class="text-white"><a href="productos_lista.php" style="color: #fff">Ultimas Compras</a></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-success">
                                <i class="fa fa-truck float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Facturas</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo $numero_facturas; ?></h1>
                                <span class="text-white"><a href="productos_listav.php" style="color: #fff">Ultimas Facturas</a></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-danger">
                                <i class="fa fa-truck float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Stock Bajo</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo $numero_productosbajos; ?></h1>
                                <span class="text-white"><a href="productosbajos_control.php" style="color: #fff">Ver Lista</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="row">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">ULTIMOS PRODUCTOS AGREGADOS</h4>
                                </div>
                            </div>
                            <table id="tabla" class="table table-striped table table-bordered table-hover table table-sm">
                                <thead>
                                    <tr>
                                        <th>Id.Producto</th>
                                        <th>Nombre del Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Imagen</th>
                                    </tr>
                                </thead>
                                <tbody  bgcolor="#FFFFFF">
                                    <?php do { ?>
                                        <tr>
                                            <td><a href="productos_rec.php?idproducto=<?php echo $row_RstProductos['idproducto']; ?>" class="btn btn-outline-success" role="button">  <i class="fa fa-search-plus"></i>  <?php echo $row_RstProductos['idproducto']; ?></a></td>
                                            <td><?php echo $row_RstProductos['nombre']; ?></td>
                                            <td align="center"><button class="<?php echo stockbajo($row_RstProductos['idproducto']); ?>"><?php echo $row_RstProductos['cantidad']; ?></button></td>
                                            <td><?php echo $row_RstProductos['precio']; ?></td>
                                            <td><a href="verimagen.php?idproducto=<?php echo $row_RstProductos['idproducto']; ?>"><img src="images/<?php echo $row_RstProductos['imagen']; ?>" alt="fot" name="foto" id="foto" title="Click para ver mas informacion" /></a></td>
                                        </tr>
                                    <?php } while ($row_RstProductos = mysqli_fetch_assoc($RstProductos)); ?>
                                </tbody>
                            </table>
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
<!-- END Java Script for this page -->
<script type="text/javascript">
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Average Rainfall'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
                ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (mm)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Tokyo',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'New York',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'London',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'Berlin',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }]
    });
</script>  
<script src="js/moris/raphael-min.js"></script> 
<script src="js/moris/morris.js"></script> 
<script src="js/moris/example.js"></script>
<script src="Highcharts415/js/highcharts.js"></script> 
<script src="Highcharts415/js/highcharts-3d.js"></script> 
<script src="Highcharts415/js/modules/exporting.js"></script>
</body>
</html>