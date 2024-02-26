<?php require_once('Connections/cnx.php'); ?>
<?php
	if ((isset($_POST["MM_Update"])) && ($_POST["MM_Update"] == "FrmDatos")) 
	{
		$IdUsuario=$_POST['IdUsuario'];	
		$Nombre=trim(ucwords(strtolower($_POST['Nombre'])));
		$Nivel=$_POST['Nivel'];
		$UserName=$_POST['UserName'];
		$Email=trim(strtolower($_POST['Email']));
		$updateSQL = "UPDATE usuarios SET UserName='$UserName', Nivel='$Nivel', Nombre='$Nombre', Email='$Email' 
		WHERE IdUsuario=$IdUsuario";		
		mysqli_select_db($cnx,$database_cnx);
		$Result1 = mysqli_query($cnx,$updateSQL) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert(\"Los cambios fueron realizados con exito\");</script>"; 
		echo "<script type='text/javascript'>window.location='controlpanel_superadmin.php'</script>";
	}
?>