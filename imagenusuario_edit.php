<?php require_once('Connections/cnx.php'); ?>
<?php require_once('Connections/infousers.php'); ?>
<?php
    $IdUsuario=$_GET['idusuario'];
    mysqli_select_db($cnx,$database_cnx);
    $query_RstUsuarios = "SELECT * FROM usuarios WHERE IdUsuario=$IdUsuario";
    $RstUsuarios = mysqli_query($cnx,$query_RstUsuarios) or die(mysql_error());
    $row_RstUsuarios = mysqli_fetch_assoc($RstUsuarios);
    $totalRows_RstUsuarios = mysqli_num_rows($RstUsuarios);
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
    <link href="assets/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
    <link href="assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
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
                                <h1 class="main-title float-left">Modificar Usuario</h1>
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
                        <div class="card mb-5" >
                            <div class="card-header">
                                <h3><i class="fa fa-credit-card"></i> IMAGEN DEL USUARIO</h3>
                            </div>
                            <div class="card-body" >
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top" src="fotosusuarios/<?php echo $row_RstUsuarios['Foto']; ?>" alt="Card image cap">
                                    
                                </div>
                            </div> 
                        </div><!-- end card-->  								
                            <!-- Content here -->
                        <form  role="form"  method="post" action="imagenusuarios_changes.php" enctype="multipart/form-data" name="FrmDatos" >

                      <div class="row">
                      <div class="col-md-12 form-group">
                        <label>Subir Imagen(*)</label>
                        <br />
                        <input type="file" name="Imagen" id="filer_example">
                      </div>
                      </div>
                    <!--<hr />-->
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="button" class="btn btn-primary" onClick="javascript:history.back()">Cancelar</button>
                    <input type="hidden" name="MM_Update" value="FrmDatos" />
                    <input type="hidden" name="IdUsuario" value="<?php echo $IdUsuario; ?>" />
                  </form>    
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
    <script src="assets/plugins/jquery.filer/js/jquery.filer.min.js"></script>
<script>
$(document).ready(function(){

    'use-strict';

    //Example 2
    $('#filer_example').filer({
        limit: 1,
        maxSize: 3,
        extensions: ['jpg', 'jpeg', 'png', 'gif', 'psd'],
        changeInput: true,
        showThumbs: true,
        addMore: true
    });

</body>
</html>