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
    <!-- BEGIN CSS for this page -->
    <!-- END CSS for this page -->
</head>
<body class="adminbody">
    <div id="main">
        <!-- top bar navigation -->
        <?php include('includes/headerbar_admin.php'); ?>
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
                                <h1 class="main-title float-left">Cambiar Contraseña</h1>
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
                    <div class="row">
                        <div class="col-xl-12">	
                            <h3><img src="images/513.jpg" width="50" height="50" alt="" class="img-rounded"/> Datos del usuario </h3>								
                            <div class="card">
                                <div class="card-header">
                                    Los campos con (*) son requeridos
                                </div>
                                <div class="card-block">
                                    <div class="container-fluid">
                                        <!-- <h4 class="card-title">INFORMACION DE PRODUCTOS</h4> -->
                                        <form class="" role="form"  method="post" action="superadminpass_changes.php"  name="FrmDatos">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label>Nueva Contraseña(*)</label>
                                                    <input class="form-control" type="text" name="NuevaPass" required placeholder="Nueva Contraseña"  >
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>Confirmar Contraseña(*)</label>
                                                    <input class="form-control" type="text" name="ConfirmarPass" required placeholder="Confirmar Contraseña" >
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
</body>
</html>