<?php require_once('Connections/cnx.php'); ?>
<?php
	if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "FrmDatos")) 
	{
		$Nombre=trim(ucwords(strtolower($_POST['Nombre'])));
		$Nivel=$_POST['Nivel'];
		$UserName=$_POST['UserName'];
		$Email=trim(strtolower($_POST['Email']));
		$insertSQL = "INSERT INTO usuarios (UserName, Nivel, Nombre, Email) 
		VALUES ('$UserName', '$Nivel', '$Nombre', '$Email')";
		mysqli_select_db($cnx,$database_cnx);
		$Result1 = mysqli_query($cnx,$insertSQL) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert(\"Los cambios fueron realizados con exito\");</script>"; 
		echo "<script type='text/javascript'>window.location='usuarios_control.php'</script>";
	}
?>
