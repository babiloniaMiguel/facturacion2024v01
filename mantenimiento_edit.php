<?php require_once('Connections/cnx.php'); ?>
<?php require_once('Connections/infousers.php'); ?>
<?php include('includes/contadores.php'); ?> 
<?php 
    $Cedula=$_GET['Cedula'];
    mysqli_select_db($cnx,$database_cnx);
    $query_RstMantenimiento = "SELECT * FROM mantenimiento where Cedula='$Cedula'";
    $RstMantenimiento = mysqli_query($cnx,$query_RstMantenimiento) or die(mysql_error());
    $row_RstMantenimiento = mysqli_fetch_assoc($RstMantenimiento);
    $totalRows_RstMantenimiento = mysqli_num_rows($RstMantenimiento);
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
                                <h1 class="main-title float-left">Modificar Mantenimiento</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"> <a href="controlpanel_admin.php">Inicio </a> </li>
                                    <li class="breadcrumb-item active"> <a href="productos_control.php"> Panel Mantenimiento </a> </li>
                                    <li class="breadcrumb-item active">Nuevo Mantenimiento</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- CONTENIDO DE LA PAGINA-->
                    <div class="row">
                        <div class="col-xl-12">	
                        <h3><img src="images/bicicleta.jpg" width="50" height="50" alt="" class="img-rounded"/> Datos del Mantenimiento </h3>								
                            <div class="card">
                                <div class="card-header">
                                    Los campos con (*) son requeridos
                                </div>
                                <div class="card-block">
                                    <div class="container-fluid">
                                    <form  role="form"  method="post" action="mantenimiento_changes.php"  name="FrmDatos" data-parsley-validate novalidate>
                                        <div class="alert alert-primary">DATOS DEL CLIENTE</div>
                                        <div class="row">
                                            <div class="col-md-3 form-group">
                                                <label>Cedula(*)</label>
                                                <input class="form-control" type="text" name="Cedula" readonly value="<?php echo $row_RstMantenimiento['Cedula']; ?>" >
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label>Nombre(*)</label>
                                                <input class="form-control" type="text" name="Nombre" required placeholder="Nombre del cliente"  value="<?php echo $row_RstMantenimiento['Nombre']; ?>">
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label>Apellido(*)</label>
                                                <input class="form-control" type="text" name="Apellido" required placeholder="Apellido del cliente"  value="<?php echo $row_RstMantenimiento['Apellido']; ?>">
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label>Teléfono</label>
                                                <input class="form-control" type="text" name="Telefono"  placeholder="Telefono del cliente"  value="<?php echo $row_RstMantenimiento['Telefono']; ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 form-group">
                                                <label>Celular(*)</label>
                                                <input class="form-control" type="text" name="Celular" required placeholder="Celular del cliente"  value="<?php echo $row_RstMantenimiento['Celular']; ?>">
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label>Direccion(*)</label>
                                                <input class="form-control" type="text" name="Direccion" required placeholder="Direccion del cliente"  value="<?php echo $row_RstMantenimiento['Direccion']; ?>">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Correo(*)</label>
                                                <input class="form-control" type="text" name="Correo" required placeholder="Correo del cliente"  value="<?php echo $row_RstMantenimiento['Correo']; ?>">
                                            </div>
                                        </div>
                                         <div class="alert alert-primary">DATOS DE LA BICICLETA</div>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label>Serial Bicicleta(*)</label>
                                                <input class="form-control" type="text" name="Serialbici" required placeholder="Serial Bicicleta" value="<?php echo $row_RstMantenimiento['Serialbici']; ?>">
                                            </div>
                                            <div class="col-md-5 form-group">
                                                <label>Marca Bicicleta(*)</label>
                                                <input class="form-control" type="text" name="Marcabici" required value="<?php echo $row_RstMantenimiento['Marcabici']; ?>">
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label>Color Bicicleta(*)</label>
                                                <input class="form-control" type="text" name="Colorbici" required value="<?php echo $row_RstMantenimiento['Colorbici']; ?>">
                                            </div>
                                        </div>
                                          <div class="alert alert-primary">OTROS DATOS</div>
                                        <div class="row">
                                            <div class="col-md-2 form-group">
                                                <label>Fecha entrada(*)</label>
                                                <input class="form-control" type="text" name="Fechaentrada" required placeholder="Fechaentrada"  value="<?php echo $row_RstMantenimiento['Fechaentrada']; ?>">
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label>Fecha salida(*)</label>
                                                <input class="form-control" type="text" name="Fechasalida" required placeholder="Fechasalida"  value="<?php echo $row_RstMantenimiento['Fechasalida']; ?>">
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label>Dias almacenamiento(*)</label>
                                                <input class="form-control" type="number" name="Diasalmacenamiento" required placeholder="Solo numeros"  value="<?php echo $row_RstMantenimiento['Diasalmacenamiento']; ?>">
                                            </div>
                                             <div class="col-md-3 form-group">
                                                <label>Tipo mantemiento(*)</label>
                                                <select class="form-control" id="sel1" name="Tipomantemiento" required>
                                                <option value="<?php echo $row_RstMantenimiento['Tipomantemiento']; ?>"><?php echo $row_RstMantenimiento['Tipomantemiento']; ?></option>    
                                                <option value="General">General</option>
                                                <option value="General - grasa premium">General - grasa premium</option>
                                                </select>
                                            </div>
                                             <div class="col-md-3 form-group">
                                                <label>Valor abono(*)</label>
                                                <input class="form-control" type="number" name="Valorabono" required placeholder="solo numeros"  value="<?php echo $row_RstMantenimiento['Valorabono']; ?>">
                                            </div>
                                        </div>
                                        <!--<hr />-->
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Guardar</button>
                                        <button type="button" class="btn btn-primary" onClick="javascript:history.back()"> <i class="fa fa-undo"></i> Cancelar</button>
                                        <input type="hidden" name="MM_Update" value="FrmDatos" />

                                        <br /><br />
                                    </form>
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