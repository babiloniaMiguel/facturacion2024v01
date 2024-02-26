<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Inventario 2018</title>
        <meta name="description" content="Love Authority." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="css/stylelogin.css" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
        <!-- <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/> -->
        <style type="text/css">
            #select{
            padding: 5px 8px;
            width: 100%;
            border: none;
            box-shadow: none;
            background-color: #ff5722 !important;
            background-image: none;
            appearance: none;
            }
            .password-eye {
            margin: -37px 10px 0;
            float: right;
            width: 40px;
            height: 30px;
            background-size: 20px 20px;
            position: relative;
            z-index: 10;
            }
        </style>
      <script type="text/javascript">
function mostrarPassword(){
    var cambio = document.getElementById("txtPassword");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
  } 
  
  $(document).ready(function () {
  //CheckBox mostrar contraseña
  $('#ShowPassword').click(function () {
    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
  });
});
</script>    
    </head>
    <body>
        <!--hero section-->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 mx-auto">
                        <div class="card border-none">
                            <div class="card-body">
                                <div class="mt-2">
                                    <img src="fotosusuarios/logologin.png" alt="Male" class="brand-logo mx-auto d-block img-fluid rounded-circle"/>
                                </div>
                                <p class="mt-4 text-white lead text-center">
                                    Inicie sesión para acceder a su cuenta de Autorizacion
                                </p>
                                <div class="mt-4">
                                    <form action="accesosistema.php" method="POST" class="margin-bottom-0" name="form1" id="form1">
                                        <div class="form-group">
                                            <span>Usuario</span>  
                                            <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Nombre de Usuario" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <span>Contraseña</span>  
                                            <input type="password" class="form-control" id="txtPassword" name="Password" placeholder="Entre la contraseña" autocomplete="off">
                                            <div class="input-group-append"><button id="show_password" class="btn btn-primary password-eye" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button> </div> 
                                        </div>
                                        <div class="form-group">
                                        <span>Tipo de Usuario</span>    
                                        <select class="form-control" id="select" name="TipoUser">      
                                    <option value="SuperAdministrador">Super Administrador</option>
                                    <option value="Administrador">Admistrador</option>
                                    <option value="Invitado">Invitado</option>
                                </select>    
                                        </div>        
                                        <button type="submit" class="btn btn-primary float-right">ENTRAR</button>
                                    </form>
                                    <!-- <a class="pull-right text-muted" href="#" id="olvidado" style="font-size:12px;font-weight:bold;background-color:#ffffff;margin-right:2px;padding:4px;border-radius: 20px">Olvidó la contraseña?</a> -->
                                    <div class="clearfix"></div>
                                    <p class="content-divider center mt-4"><span>or</span></p>
                                </div>
                                <p class="mt-4 social-login text-center">
                                    <a href="#" class="btn btn-twitter"><em class="ion-social-twitter"></em></a>
                                    <a href="#" class="btn btn-facebook"><em class="ion-social-facebook"></em></a>
                                    <a href="#" class="btn btn-linkedin"><em class="ion-social-linkedin"></em></a>
                                    <a href="#" class="btn btn-google"><em class="ion-social-googleplus"></em></a>
                                    <a href="#" class="btn btn-github"><em class="ion-social-github"></em></a>
                                </p>
                                <!-- <p class="text-center">
                                    Don't have an account yet? <a href="register.html">Sign Up Now</a>
                                </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 mt-5 footer">
                        <!-- <p class="text-white small text-center">
                            &copy; 2017 Login/Register Forms. A FREE Bootstrap 4 component by 
                            <a href="https://wireddots.com">Wired Dots</a>. Designed by <a href="https://twitter.com/attacomsian">@attacomsian</a>
                        </p> -->
                    </div>
                </div>
            </div>
        </section>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>
<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<!-- <script>                                
$(document).ready(function() {
    $('.select2').select2();
});
</script> -->
    </body>
</html>
