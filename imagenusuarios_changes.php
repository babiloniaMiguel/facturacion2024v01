<?php require_once('Connections/cnx.php'); ?>
<?php
	if ((isset($_POST["MM_Update"])) && ($_POST["MM_Update"] == "FrmDatos")) 
	{
	$IdUsuario=$_POST['IdUsuario'];
	$Imagen= $_FILES['Imagen']['name'];
	$tipoimagen= $_FILES['Imagen']['type'];
	if($Imagen!="" && $tipoimagen=='image/png' || $tipoimagen=='image/jpeg' || $tipoimagen=='image/jpg')
	{
	$updateSQL = "UPDATE usuarios SET Foto='$Imagen' WHERE IdUsuario=$IdUsuario";
	mysqli_select_db($cnx,$database_cnx);
	$Result1 = mysqli_query($cnx,$updateSQL) or die(mysql_error());
	//subir foto
	if($Result1)
	{
	move_uploaded_file($_FILES['Imagen']['tmp_name'],"fotosusuarios/".$Imagen);
	}
	echo "<script type=\"text/javascript\">alert(\"Los cambios fueron realizados con exito\");</script>"; 
	echo "<script type='text/javascript'>window.location='usuarios_control.php'</script>";
	}			
	else 
	{
	?>
<html>
<head>
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />	
</head>
<div class="alert alert-danger alert-dismissable">
<a href="controlpanel_admin.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<H2>NO SELECCIONO UNA IMAGEN VALIDA </H2>
<hr>
<button type="button" class="btn btn-primary" onClick="window.location.href='productos_control.php">Salir  <i class="fa fa-undo"></i>  </button>
</div>
</body>
</html>
<?php
	}		
	}
?>