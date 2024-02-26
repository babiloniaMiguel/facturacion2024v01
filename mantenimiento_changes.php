<?php require_once('Connections/cnx.php'); ?>
<?php
	if ((isset($_POST["MM_Update"])) && ($_POST["MM_Update"] == "FrmDatos")) 
	{
	$Cedula=$_POST['Cedula'];
	$Nombre=trim($_POST['Nombre']);
	$Apellido=$_POST['Apellido'];
	$Telefono=$_POST['Telefono'];
	$Celular=$_POST['Celular'];
	$Direccion=$_POST['Direccion'];
	$Correo=$_POST['Correo'];
	$Serialbici=$_POST['Serialbici'];
	$Marcabici=$_POST['Marcabici'];
	$Colorbici=$_POST['Colorbici'];
	$Fechaentrada=$_POST['Fechaentrada'];
	$Fechasalida=$_POST['Fechasalida'];
	$Diasalmacenamiento=$_POST['Diasalmacenamiento'];
	$Tipomantemiento=$_POST['Tipomantemiento'];
	$Valorabono=$_POST['Valorabono'];
	$Foto='sinfoto.jpg';
	$insertSQL = "UPDATE mantenimiento SET 
	Nombre = '$Nombre', Apellido = '$Apellido', Telefono = '$Telefono', Celular = '$Celular', Direccion = '$Direccion', 
	Correo = '$Correo', Serialbici = '$Serialbici', Marcabici = '$Marcabici', Colorbici = '$Colorbici', Fechaentrada = '$Fechaentrada', 
	Fechasalida = '$Fechasalida', Diasalmacenamiento = '$Diasalmacenamiento', Tipomantemiento = '$Tipomantemiento', Valorabono = '$Valorabono' 
	WHERE Cedula = '$Cedula'";
	mysqli_select_db($cnx,$database_cnx);
	$InsertProductos = mysqli_query($cnx,$insertSQL) or die(mysql_error());
	echo "<script type=\"text/javascript\">alert(\"REGISTRO GUARDADO CON EXITO\");</script>"; 
	echo "<script type='text/javascript'>window.location='mantenimiento_control.php'</script>";
	}

?>
