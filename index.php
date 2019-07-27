<!DOCTYPE html>
<body>
<center>
  <h1>Registro de usuarios</h1>

  <form action="guardar.php" method="POST">
    <div>
      <table>
        <tr><td><label class="form">Cedula:</label></td></tr>
        <tr><td><input name="cedula" id="cedula" type="text" maxlength="10" onkeypress="return solonumeros(event)" onchange="check_cedula(form)"></td></tr>
        <tr><td><label class="form">Nombre:</label></td></tr> 
        <tr><td><input name="nombre" id="nombre" type="text" onkeypress="return sololetras(event)"></td></tr> 
        <tr><td><label class="form">Telefono:</label></td></tr> 
        <tr><td><input name="telefono" id="telefono" type="text" maxlength="10" onkeypress="return solonumeros(event)"></td></tr> 
        <tr><td><label class="form">Correo:</label></td></tr> 
        <tr><td><input name="correo" id="correo" type="text"></td></tr> 
        <tr><td><label class="form">Usuario:</label></td></tr> 
        <tr><td><input name="user" id="user" type="text"></td></tr> 
        <tr><td><label class="form">Contraseña:</label></td></tr> 
        <tr><td><input name="pass" id="pass" type="password"></td></tr>  
      </table>
    </div><br><br>
              
    <table>
      <tr><td><input name="submit" type="submit" class="button" value="Registrar" /></td>
      <td><input name="consultar" type="button" class="btn"  value="Consultar" onclick="location.href='contenido.php'"/></td></tr>
    </table>
</center>
</form> 
<script src="js/cedula.js"></script>
</body>
