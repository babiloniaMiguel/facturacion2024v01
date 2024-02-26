<?php require_once('Connections/cnx.php'); ?>
<?php require_once('Connections/infousers.php'); ?>
<?php
if ((isset($_POST["MM_Update"])) && ($_POST["MM_Update"] == "FrmDatos")) 
	{
	//$IdUsuario=$_POST['IdUsuario'];
	$NuevaPass=$_POST['NuevaPass'];	
	$ConfirmarPass=$_POST['ConfirmarPass'];	
	if($NuevaPass!=$ConfirmarPass)
		{
			//echo "<script type='text/javascript'>window.location='page500.php'</script>";
		echo "<script type=\"text/javascript\">alert(\"Las contraseñas no coinciden, intente de nuevo\");</script>"; 
		echo "<script type='text/javascript'>window.location='controlpanel_superadmin.php'</script>";
		}
	else
		{
		//$NuevaClaveEncript=sha1(md5($ClaveNueva));		
		//$NuevaPassEncript=sha1(md5($NuevaPass));	
		$updateSQL = "UPDATE usuarios SET Pass='$NuevaPass' WHERE UserName='$colname_RstUsuarios'";
		mysqli_select_db($cnx,$database_cnx);
		$Result1 = mysqli_query($cnx,$updateSQL) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert(\"Los cambios fueron realizados con exito\");</script>"; 
		echo "<script type='text/javascript'>window.location='controlpanel_superadmin.php'</script>";
		}
	}
?>