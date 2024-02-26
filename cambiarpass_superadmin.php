<?php require_once('Connections/cnx.php'); ?>
<?php require_once('Connections/infousers.php'); ?>
<?php
  //Buscar el registro
  mysqli_select_db($cnx,$database_cnx);
  $query_RstUsuariosList  = "SELECT * FROM usuarios WHERE UserName = '$colname_RstUsuarios'";
  $RstUsuariosList = mysqli_query($cnx,$query_RstUsuariosList) or die(mysql_error());
  $row_RstUsuariosList = mysqli_fetch_assoc($RstUsuariosList);
  $totalRows_RstUsuariosList = mysqli_num_rows($RstUsuariosList);
?>
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <?php include('includes/meta.php'); ?>
  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->
  <!-- CORE CSS-->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <style type="text/css">
  #foto {
    height: 200px;
    width: 200px;
    border-radius: 80px;
    border-style: solid;
    border-width: 1px;
    border-color: #f4b906;
    padding: 2px;

  }
  #mdialTamanio
  {
    width: 80% !important;
  }
  .elemento 
  {
  -webkit-box-shadow: 20px 20px 45px -6px rgba(0,0,0,0.79);
  -moz-box-shadow: 20px 20px 45px -6px rgba(0,0,0,0.79);
  box-shadow: 20px 20px 45px -6px rgba(0,0,0,0.79);
  } 
</style>
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <?php include('includes/header.php'); ?>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <?php include('includes/leftsidebarnav_superadmin.php'); ?>
      <!-- END LEFT SIDEBAR NAV-->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START CONTENT -->
      <section id="content">
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">CAMBIAR CONTRASEÑA USUARIO</h5>
                <ol class="breadcrumbs">
                    <li><a href="controlpanel_admin.php">INICIO</a></li>
                    <li class="active">Contraseña Usuario</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        <!--start container-->
        <div class="container">
          <div class="section">
            <!-- <p class="caption">FOTO DEL USUARIO</p>
            <div class="divider"></div> -->
            <div class="row" style="margin: 10px">
              <!-- <form class="col s12" action="superusuarios_changes.php" method="POST" class="margin-bottom-0" name="FrmDatos" id="form1"> -->
                <form  class="col s12" method="post" action="superadminpass_changes.php" enctype="multipart/form-data" name="FrmDatos" id="form1" >  
                  <div class="row">  
                    <div class="card-content">
                      <img src="fotosusuarios/<?php echo $row_RstUsuariosList['Foto']; ?>" alt="" id="foto" class="circle responsive-img activator card-profile-image z-depth-5 shadow-demo">
                      <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                        <i class="mdi-editor-mode-edit"></i>
                      </a>
                    </div>
                  </div>
                  <div class="divider"></div>
                  <br />
                  <div class="row">
                    <div class="input-field col s8">
                      <input id="first_name" type="text" required  name="Nombre" readonly value="<?php echo $row_RstUsuariosList['Nombre']; ?>" >
                      <label for="first_name">Nombre Completo</label>
                    </div>
                  </div>

                  <div class="row">
                  <div class="input-field col s6">
                    <input id="passnueva" type="password" required  name="NuevaPass"  >
                    <label for="passnueva">Nueva Contraseña(*)</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="confirmaspass" type="password" required  name="ConfirmarPass" >
                    <label for="confirmaspass">Confirmar Contraseña(*)</label>
                  </div>
                </div>
                  <br />
                  <div class="row">
                      <button class="btn green waves-effect waves-light center" type="submit" name="action">Guardar <i class="mdi-content-save"></i></button>
                      <button type="button" class="btn cyan waves-effect waves-light center" onClick="javascript:history.back()"> <i class="mdi-content-undo"></i> Salir </button>
                      <input type="hidden" name="MM_Update" value="FrmDatos" />
                      <input type="hidden" name="UserName" value="<?php echo $UserName; ?>" />
                  </div>
                </form>
              </div>
          </div>
          <!-- Floating Action Button 
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large">
                  <i class="mdi-action-stars"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
             Floating Action Button -->
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <?php include('includes/rightsidebarnav.php'); ?>
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START FOOTER -->
<?php include('includes/footer.php'); ?>
  <!-- END FOOTER -->
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism
    <script type="text/javascript" src="js/prism/prism.js"></script>-->
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    
</body>

</html>