<?php require_once('Connections/cnx.php'); ?>
<?php require_once('Connections/infousers.php'); ?>
<?php include('includes/contadores.php'); ?> 
<?php
    mysqli_select_db($cnx,$database_cnx);
    $query_RstMantenimiento = "SELECT * FROM mantenimiento";
    $RstMantenimiento = mysqli_query($cnx,$query_RstMantenimiento) or die(mysql_error());
    $row_RstMantenimiento = mysqli_fetch_assoc($RstMantenimiento);
    $totalRows_RstMantenimiento = mysqli_num_rows($RstMantenimiento);
    //borrar registro
    if ((isset($_GET['Cedula'])) && ($_GET['Cedula'] != "")) 
    {
    $Cedula=$_GET['Cedula'];    
    $deleteSQL = "DELETE FROM mantenimiento WHERE Cedula='$Cedula'";
    $Result1 = mysqli_query($cnx, $deleteSQL) or die(mysql_error());
    header('Location: mantenimiento_control.php');
    }
    //fin
    //Buscar si el registro tiene dependientes
    function Eliminar($id)
    {
    require('Connections/cnx.php'); 
    mysqli_select_db($cnx,$database_cnx);
    //Estudios
    $sql1 = "SELECT * FROM compras WHERE Cedula=$id";
    $RstResp1 = mysqli_query($cnx,$sql1) or die(mysql_error());
    $totalRows1 = mysqli_num_rows($RstResp1);
    $clase = '';
    if ($totalRows1>0)
    {
    $clase = 'btn btn-danger disabled';
    }
    else
    {
    $clase = 'btn btn-danger';  
    }
    return $clase;  
    }
    //fin
    function verentradas($id)
    {
    require('Connections/cnx.php'); 
    mysqli_select_db($cnx,$database_cnx);
    //Estudios
    $sql1 = "SELECT * FROM compras WHERE Cedula=$id";
    $RstResp1 = mysqli_query($cnx,$sql1) or die(mysql_error());
    $totalRows1 = mysqli_num_rows($RstResp1);
    $clase = '';
    if ($totalRows1>0)
    {
    $clase = 'btn btn-outline-success';
    }
    else
    {
    $clase = 'btn btn-outline-danger disabled';  
    }
    return $clase;  
    }
    //fin
    function versalidas($id)
    {
    require('Connections/cnx.php'); 
    mysqli_select_db($cnx,$database_cnx);
    //Estudios
    $sql1 = "SELECT * FROM ventas WHERE Cedula=$id";
    $RstResp1 = mysqli_query($cnx,$sql1) or die(mysql_error());
    $totalRows1 = mysqli_num_rows($RstResp1);
    $clase = '';
    if ($totalRows1>0)
    {
    $clase = 'btn btn-outline-success';
    }
    else
    {
    $clase = 'btn btn-outline-danger disabled';  
    }
    return $clase;  
    }
    function verstock($id)
    {
    require('Connections/cnx.php'); 
    mysqli_select_db($cnx,$database_cnx);
    //Estudios
    $sql1 = "SELECT * FROM productos WHERE Cedula=$id AND cantidad>0";
    $RstResp1 = mysqli_query($cnx,$sql1) or die(mysql_error());
    $totalRows1 = mysqli_num_rows($RstResp1);
    $clase = '';
    if ($totalRows1>0)
    {
    $clase = 'btn btn-outline-success';
    }
    else
    {
    $clase = 'btn btn-outline-danger disabled';  
    }
    return $clase;  
    }
    //fin
    function pintarfila($idp)
    {
    require('Connections/cnx.php'); 
    mysqli_select_db($cnx,$database_cnx);
    //Estudios
    $sql1 = "SELECT * FROM productos WHERE Cedula=$idp";
    $RstResp1 = mysqli_query($cnx,$sql1) or die(mysql_error());
    $row_RstResp1 = mysqli_fetch_assoc($RstResp1);
    $Cantidad=$row_RstResp1['cantidad'];
    $Color = '';
    if ($Cantidad==0)
    {
    $Color = '#e51919';
    }
    return $Color;  
    }
    function stockbajo($idp)
    {
    require('Connections/cnx.php'); 
    mysqli_select_db($cnx,$database_cnx);
    //Estudios
    $sql1 = "SELECT * FROM productos WHERE Cedula=$idp";
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
    //fin
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chaman bikes</title>
    <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo.ico">
    <!-- Switchery css -->
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script> 
    <script type="text/javascript" src="script/deleteproductos.js"></script>  	
    <!-- BEGIN CSS for this page -->
    <style type="text/css">
    #foto {
        height: 50px;
        width: 50px;
        border-radius: 60px;
        border-style: solid;
        border-width: 1px;
        border-color: #f4b906;
        padding: 2px;
    }
    #mdialTamanio
    {
        width: 80% !important;
    }
</style>    
<!-- END CSS for this page -->
</head>
<body class="adminbody">
    <div id="main">


        <!-- barra superior de navegacion -->
        <?php include('includes/headerbar_admin.php'); ?>
        <!-- fin de navegacion -->
        <!-- barra izquierda de navegacion -->
        <?php include('includes/leftmainsidebar_admin.php'); ?>
        <!-- fin de barra -->


        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Lista de Mantenimientos <span class="badge badge-pill badge-primary"><?php echo $totalRows_RstMantenimiento; ?></span></h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"> <a href="controlpanel_admin.php">Inicio </a> </li>
                                    <li class="breadcrumb-item active">panel Productos</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- CONTENIDO DE LA PAGINA-->
                    <div class="row">
                        <div class="col-xl-12">	
                            <!-- contenido	 -->	
                            <h3><img src="images/bicicleta.jpg" width="50" height="50" alt="" class="img-rounded"/> Datos del Mantenimiento </h3>
                            <hr />
                            <?php if($TipoUsuario=='Administrador'){ ?>
                            <a href="Mantenimiento_add.php" class="btn btn-primary" role="button"><i class="fa fa-plus"> </i> Nuevo Registro</a> 	
                            <hr /> 
                            <?php } ?>                  
                            <?php if($totalRows_RstMantenimiento>0){ ?>
                            <table id="tabla" class="table table-striped table table-bordered table-hover table table-sm">
                                <thead>
                                    <tr>
                                        <th>Cedula</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Celular</th>
                                        <th>Serial Bici</th>
                                        <th>Fecha Entrada</th>
                                        <th>Fecha Salida</th>
                                        <th>Tipo Mantemiento</th>
                                        <th>Foto</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody  bgcolor="#FFFFFF">
                                    <?php do { ?>
                                    <tr>
                                        <td><a href="mantenimiento_rec.php?Cedula=<?php echo $row_RstMantenimiento['Cedula']; ?>" class="btn btn-outline-success" role="button">  <i class="fa fa-search-plus"></i>  <?php echo $row_RstMantenimiento['Cedula']; ?></a></td>
                                        <td><?php echo $row_RstMantenimiento['Nombre']; ?></td>
                                        <td><?php echo $row_RstMantenimiento['Apellido']; ?></td>
                                        <td><?php echo $row_RstMantenimiento['Celular']; ?></td>
                                        <td><?php echo $row_RstMantenimiento['Serialbici']; ?></td>
                                        <td><?php echo $row_RstMantenimiento['Fechaentrada']; ?></td>
                                        <td><?php echo $row_RstMantenimiento['Fechasalida']; ?></td>
                                        <td><?php echo $row_RstMantenimiento['Tipomantemiento']; ?></td>
                                         <td><a href="verfotobici.php?Cedula=<?php echo $row_RstMantenimiento['Cedula']; ?>"><img src="images/<?php echo $row_RstMantenimiento['Foto']; ?>" alt="fot" name="foto" id="foto" title="Click para ver mas informacion" /></a></td>
                                        <td width="50" align="center"><a href="mantenimiento_edit.php?Cedula=<?php echo $row_RstMantenimiento['Cedula']; ?>" class="btn btn-warning" role="button"> <i class="fa fa-edit" aria-hidden="true"></i> </a></td>
                                        <td width="43" align="center"><a rel="nofollow" title="Eliminar" id="" onClick="javascript: if(!confirm('¿Desea eliminar el registro?')){return false;}" href="mantenimiento_control.php?Cedula=<?php echo $row_RstMantenimiento['Cedula']; ?>" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                    </tr>
                                    <?php } while ($row_RstMantenimiento = mysqli_fetch_assoc($RstMantenimiento)); ?>
                                </tbody>
                            </table>
                            <?php } else { ?>
                                <div class="alert alert-danger alert-dismissable">
                                <a href="controlpanel_admin.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <H2>TODAVIA NO HAY DATOS EN LA TABLA </H2>
                                <br>
                                <hr>
                                <img src="images/datosvacios.png" width="400" height="100" alt="" id="imagen1"/></div>
                                <hr>
                                <button type="button" class="btn btn-primary" onClick="javascript:history.back()">Salir  <i class="glyphicon glyphicon-log-in"></i>  </button>
                                </div>
                            <?php } ?>
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
 <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>  
<script>
    $(document).ready(function() {
        $('#tabla').DataTable( {
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },    
            "paging":   true,
            "ordering": false,
            "bJQueryUI": true,
            "iDisplayLength": 10,
            "aLengthMenu": [[5,10, 25, 50, 100, -1], [5,10, 25, 50, 100, "Todo"]],
            "info": true
        } );
    } );
</script> 
</body>
</html>