<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<center>
<table class="table table-striped col-md-6 col-xs-8" border="3">
<thead>
<tr>
<th colspan="9"><strong><center><h2>Registro de usuarios </h2></center></strong></th>            
</tr>
</thead>
<tbody>
      <tr>
        <td><strong>Cedula</strong></td>
        <td><strong>Nombre</strong></td>
        <td><strong>Telefono</strong></td>
        <td><strong>Correo</strong></td>
        <td><strong>Usuario</strong></td>
      </tr>
        <?php
        include ("conexion.php");
        $con=mysqli_connect($host,$user,$pass,$db);
        $query = "select * from registro";
        $resultado=$con->query($query);
        while($row=$resultado->fetch_assoc()){
          ?>
        <tr>
            <td><?php echo $row['cedula']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['user']; ?></td>
        </tr>
<?php
}
?>
</tbody>
</table>
</center>
<form>
<center>
<br>
<input name="button" type="button" class="button" value="Nuevo" onclick="location.href='index.php'"/> <th></th>
<br>
</center>
</form>
</body>
</html>