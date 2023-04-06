<!DOCTYPE html>  
<html>  
<head>   <title>Lista de Usuarios</title>  
</head>  
<body>  
    <table>
        <tr>
            <th>Eliminar</th>
            <th>Editar</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>RFC</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Estatus</th>
        </tr>
        <tr>
<?php
include("../Controlador/usuariosControlador.php");
$resultado=listaUsuarios();
while($fila = $resultado->fetch_assoc())
{
    echo "<td><a  onclick='confirmaEliminar($fila["id_usuario"])'></a></td>";
    echo "<td><a  href='Vista/editarUsuForm.php?id_usuario=$fila["id_usuario"]'></a></td>";
    echo ("<td>".$fila["usuario"]."</td>");
    echo ("<td>".$fila["nombre"]."</td>");
    echo ("<td>".$fila["direccion"]."</td>");
    echo ("<td>".$fila["rfc"]."</td>");
    echo ("<td>".$fila["telefono"]."</td>");
    echo ("<td>".$fila["correo"]."</td>");
    echo ("<td>".$fila["status"]."</td>");

}

?>
</tr>
    </table>


</body>  
</html> 