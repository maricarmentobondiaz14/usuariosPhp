<html>
<body>
<form action="editar_usuarios_Vista.php" method="post">
<div>
    <label>Id Usuario:</label> 
    <input type="text" name="id_usuario" value="<?php echo $_GET['id_usuario']; ?>" disabled  >
</div>  
<div>
    <label>Usuario:</label> 
    <input type="text" name="nombre">
</div>  
<div>
    <label>Password: </label>
    <input type="password" name="password">
</div>  
<div>
    <label>Nombre:</label> 
    <input type="text" name="nombre">
</div>
<div>
    <label>Direccion: </label>
    <input type="text" name="direccion">
</div>    
<div>
    <label>RFC: </label>
    <input type="text" name="rfc">
</div>
<div>
    <label>Telefono: </label>
    <input type="text" name="telefono">
</div>
<div>
    <label>Email: </label>
    <input type="email" name="Correo">
</div>
<div>
<label><input type="checkbox" id="cboStatus" value="1" checked > Estatus</label>
</div>
    
    <input type="submit" value="Enviar">
</form>

</body>
</html>