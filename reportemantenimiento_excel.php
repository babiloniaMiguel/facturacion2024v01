<?php require_once('Connections/cnx.php'); ?>
<?php require_once('Connections/infousers.php'); ?>
<?php
  mysqli_select_db($cnx,$database_cnx);
  $query_RstMantenimiento = "SELECT * FROM mantenimiento ORDER BY Nombre";
  $RstMantenimiento = mysqli_query($cnx,$query_RstMantenimiento) or die(mysql_error());
  $row_RstMantenimiento = mysqli_fetch_assoc($RstMantenimiento);
  $totalRows_RstMantenimiento = mysqli_num_rows($RstMantenimiento);
  //fin
  //Exportar datos de php a Excel
  header("Content-Type: application/vnd.ms-excel");
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header('Content-Type: text/html; charset=UTF-8');
  header("content-disposition: attachment;filename=Reportes-mantenimiento.xls");
  //fin
?>
<html LANG="es">
<head>
  <title>::. Exportacion de Datos .::</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
  <table BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
    <tr>
      <th>Cedula</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Telefono</th>
      <th>Celular</th>
      <th>Direccion</th>
      <th>Correo</th>
      <th>Serialbici</th>
      <th>Marcabici</th>
      <th>Colorbici</th>
      <th>Fechaentrada</th>
      <th>Fechasalida</th>
      <th>Diasalmacenamiento</th>
      <th>Tipomantemiento</th>
      <th>Valorabono</th>
    </tr>
    <tbody>
    <?php do { ?>  
      <tr>
        <td><?php echo $row_RstMantenimiento['Cedula']; ?></td>
        <td><?php echo $row_RstMantenimiento['Nombre']; ?></td>
        <td><?php echo $row_RstMantenimiento['Apellido']; ?></td>
        <td><?php echo $row_RstMantenimiento['Telefono']; ?></td>
        <td><?php echo $row_RstMantenimiento['Celular']; ?></td>
        <td><?php echo $row_RstMantenimiento['Direccion']; ?></td>
        <td><?php echo $row_RstMantenimiento['Correo']; ?></td>
        <td><?php echo $row_RstMantenimiento['Serialbici']; ?></td>
        <td><?php echo $row_RstMantenimiento['Marcabici']; ?></td>
        <td><?php echo $row_RstMantenimiento['Colorbici']; ?></td>
        <td><?php echo $row_RstMantenimiento['Fechaentrada']; ?></td>
        <td><?php echo $row_RstMantenimiento['Fechasalida']; ?></td>
        <td><?php echo $row_RstMantenimiento['Diasalmacenamiento']; ?></td>
        <td><?php echo $row_RstMantenimiento['Tipomantemiento']; ?></td>
        <td><?php echo $row_RstMantenimiento['Valorabono']; ?></td>
      </tr>
      </tbody>
    <?php } while ($row_RstMantenimiento = mysqli_fetch_assoc($RstMantenimiento)); ?>
  </table>
</body>
</html>